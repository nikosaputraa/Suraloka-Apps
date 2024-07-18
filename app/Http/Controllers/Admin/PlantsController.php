<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PlantsCategory;
use App\Models\Plants;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class PlantsController extends Controller
{
    public function index()
    {
        $categories = PlantsCategory::latest()->paginate(5);
        $plants = Plants::with('category')->latest()->paginate(5);
        
        return view('admin.plants.plants-settings', compact('plants', 'categories'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:animal_categories',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // max 2MB
        ]);

        // Handle file upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('images/categories', $imageName, 'public');
        }

        PlantsCategory::create([
            'name' => $request->name,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.plants')->with('success', 'Category created successfully.');
    }


    public function update(Request $request, PlantsCategory $plantsCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:plants_categories,name,'.$plantsCategory->id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // max 2MB
        ]);
    
        // Handle file upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('images/categories', $imageName, 'public');
    
            // Delete old image if exists
            if ($plantsCategory->image) {
                Storage::disk('public')->delete($plantsCategory->image);
            }
    
            $plantsCategory->update([
                'name' => $request->name,
                'image' => $imagePath,
            ]);
        } else {
            $plantsCategory->update([
                'name' => $request->name,
            ]);
        }
    
        // Response JSON untuk handle request dengan AJAX
        return response()->json(['message' => 'Category updated successfully.']);
    }
    
    public function destroy(plantsCategory $plantsCategory)
    {
        // Delete image if exists
        if ($plantsCategory->image) {
            Storage::disk('public')->delete($plantsCategory->image);
        }

        $plantsCategory->delete();

        return redirect()->route('admin.plants')->with('success', 'Category deleted successfully.');
    }


    //List-Plants
    public function plantShow($id)
    {
        $plant = Plants::findOrFail($id);
        return view('admin.plants.plants-show', compact('plant'));
    }

    public function plantEdit($id)
    {
        $categories = PlantsCategory::all();
        $plants = Plants::findOrFail($id);
        return view('admin.plants.plants-edit', compact('plants', 'categories'));
    }

    public function plantStore(Request $request)
    {
        $request->validate([
            'plant_name' => 'required|string',
            'latin_name' => 'required|string',
            'category_id' => 'required|exists:plants_categories,id',
            'plant_desc' => 'required|string',
            'plant_habitat' => 'required|string',
            'plant_origin' => 'required|string',
            'plant_klasifikasi' => 'required|string',
            'plant_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // max 2MB
        ]);

        $imagePath = null;
        if ($request->hasFile('plant_image')) {
            $image = $request->file('plant_image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('images/plant_list', $imageName, 'public');
        }

        Plants::create([
            'plant_name' => $request->plant_name,
            'latin_name' => $request->latin_name,
            'category_id' => $request->category_id,
            'plant_desc' => $request->plant_desc,
            'plant_habitat' => $request->plant_habitat,
            'plant_origin' => $request->plant_origin,
            'plant_klasifikasi' => $request->plant_klasifikasi,
            'plant_image' => $imagePath,
            
        ]);

        return redirect()->route('admin.plants')->with('success', 'Plants created successfully.');
    }

    public function plantUpdate(Request $request, $id)
    {
        $request->validate([
            'plant_name' => 'required|string',
            'latin_name' => 'required|string',
            'category_id' => 'required|exists:plants_categories,id',
            'plant_desc' => 'required|string',
            'plant_habitat' => 'required|string',
            'plant_origin' => 'required|string',
            'plant_klasifikasi' => 'required|string',
            'plant_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',  // max 2MB
        ]);

        $plants = Plants::findOrFail($id);

        // Update data animal
        $plants->plant_name = $request->input('plant_name');
        $plants->latin_name = $request->input('latin_name');
        $plants->category_id = $request->input('category_id');
        $plants->plant_desc = $request->input('plant_desc');
        $plants->plant_habitat = $request->input('plant_habitat');
        $plants->plant_origin = $request->input('plant_origin');
        $plants->plant_klasifikasi = $request->input('plant_klasifikasi');

        // Handle image upload if provided
        if ($request->hasFile('plant_image')) {
            // Delete existing image if exists
            if ($plants->plant_image) {
                Storage::disk('public')->delete($plants->plant_image);
            }

            $image = $request->file('plant_image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('images/plant_list', $imageName, 'public');

            $plants->plant_image = $imagePath;
        }

        $plants->save();

        return redirect()->route('admin.plants')->with('success', 'Plants updated successfully.');
    }

    public function plantDestroy(Plants $plants)
    {
        $plants->deleteImages();
        $plants->delete();

        return redirect()->route('admin.plants')->with('success', 'Plants deleted successfully.');
    }
}
