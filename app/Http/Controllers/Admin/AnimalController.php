<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AnimalCategory;
use App\Models\Animal;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


class AnimalController extends Controller
{

    public function show($id)
    {
        $animal = Animal::findOrFail($id);
        return view('admin.animals.animals-show', compact('animal'));
    }

    public function edit($id)
    {
        $categories = AnimalCategory::all();
        $animal = Animal::findOrFail($id);
        return view('admin.animals.animals-edit', compact('animal', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'animal_name' => 'required|string',
            'latin_name' => 'required|string',
            'category_id' => 'required|exists:animal_categories,id',
            'animal_desc' => 'required|string',
            'animal_habitat' => 'required|string',
            'animal_origin' => 'required|string',
            'animal_diet' => 'required|string',
            'animal_lifespan' => 'required|string',
            'animal_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // max 2MB
        ]);

        $imagePath = null;
        if ($request->hasFile('animal_image')) {
            $image = $request->file('animal_image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('images/animal_list', $imageName, 'public');
        }

        Animal::create([
            'animal_name' => $request->animal_name,
            'latin_name' => $request->latin_name,
            'category_id' => $request->category_id,
            'animal_desc' => $request->animal_desc,
            'animal_habitat' => $request->animal_habitat,
            'animal_origin' => $request->animal_origin,
            'animal_diet' => $request->animal_diet,
            'animal_lifespan' => $request->animal_lifespan,
            'animal_image' => $imagePath,
            
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Animal created successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'animal_name' => 'required|string',
            'latin_name' => 'required|string',
            'category_id' => 'required|exists:animal_categories,id',
            'animal_desc' => 'required|string',
            'animal_habitat' => 'required|string',
            'animal_origin' => 'required|string',
            'animal_diet' => 'required|string',
            'animal_lifespan' => 'required|string',
            'animal_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',  // max 2MB
        ]);

        $animal = Animal::findOrFail($id);

        // Update data animal
        $animal->animal_name = $request->input('animal_name');
        $animal->latin_name = $request->input('latin_name');
        $animal->category_id = $request->input('category_id');
        $animal->animal_desc = $request->input('animal_desc');
        $animal->animal_habitat = $request->input('animal_habitat');
        $animal->animal_origin = $request->input('animal_origin');
        $animal->animal_diet = $request->input('animal_diet');
        $animal->animal_lifespan = $request->input('animal_lifespan');

        // Handle image upload if provided
        if ($request->hasFile('animal_image')) {
            // Delete existing image if exists
            if ($animal->animal_image) {
                Storage::disk('public')->delete($animal->animal_image);
            }

            $image = $request->file('animal_image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('images/animal_list', $imageName, 'public');

            $animal->animal_image = $imagePath;
        }

        $animal->save();

        return redirect()->route('admin.dashboard')->with('success', 'Animal updated successfully.');
    }

    public function destroy(Animal $animal)
    {
        $animal->deleteImages();
        $animal->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Animal deleted successfully.');
    }
}