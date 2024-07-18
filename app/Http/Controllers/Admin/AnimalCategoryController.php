<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AnimalCategory;
use App\Models\Animal;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class AnimalCategoryController extends Controller
{
    public function index()
    {
        $categories = AnimalCategory::orderByDesc('created_at')->paginate(5);
        $animals = Animal::with('category')->orderByDesc('created_at')->paginate(5);
        
        return view('admin.animals.animal-settings', compact('animals', 'categories'));
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

        AnimalCategory::create([
            'name' => $request->name,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Category created successfully.');
    }


    public function update(Request $request, AnimalCategory $animalCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:animal_categories,name,'.$animalCategory->id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // max 2MB
        ]);
    
        // Handle file upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('images/categories', $imageName, 'public');
    
            // Delete old image if exists
            if ($animalCategory->image) {
                Storage::disk('public')->delete($animalCategory->image);
            }
    
            $animalCategory->update([
                'name' => $request->name,
                'image' => $imagePath,
            ]);
        } else {
            $animalCategory->update([
                'name' => $request->name,
            ]);
        }
    
        // Response JSON untuk handle request dengan AJAX
        return response()->json(['message' => 'Category updated successfully.']);
    }
    
    public function destroy(AnimalCategory $animalCategory)
    {
        // Delete image if exists
        if ($animalCategory->image) {
            Storage::disk('public')->delete($animalCategory->image);
        }

        $animalCategory->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Category deleted successfully.');
    }
}