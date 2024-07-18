<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AnimalCategory;
use App\Models\Animal;
use App\Models\PlantsCategory;
use App\Models\Plants;

class CollectionsController extends Controller
{
    //ANIMALS
    public function animalsCollection()
    {
        $categories = AnimalCategory::all();

        $defaultCategoryId = $categories->first()->id;
        $animalCategory = AnimalCategory::findOrFail($defaultCategoryId);
        $animals = Animal::where('category_id', $defaultCategoryId)->get();
        $carousel = Animal::all();

        return view('our-collections.animals.animals', compact('animalCategory', 'categories', 'animals', 'carousel'));
    }

    public function animalCategory($category)
    {
        $animalCategory = AnimalCategory::findOrFail($category);
        $categories = AnimalCategory::all();
        $carousel = Animal::all();
        $animals = Animal::where('category_id', $animalCategory->id)->get();

        return view('our-collections.animals.animals', compact('animalCategory', 'categories', 'animals', 'carousel'));
    }

    public function searchAnimal(Request $request)
    {
        $query = $request->input('query');
        
        $animals = Animal::where('animal_name', 'like', '%'.$query.'%')
                        ->orWhere('animal_desc', 'like', '%'.$query.'%')
                        ->get();

        $categories = AnimalCategory::all();
        $animalCategory = AnimalCategory::first();


        return view('our-collections.animals.animals', [
            'animals' => $animals,
            'categories' => $categories,
            'animalCategory' => $animalCategory,
        ]);
    }

    public function animalDesc($id)
    {
        $animals = Animal::where('id', $id)->get();
        $relatedAnimals = Animal::inRandomOrder()->take(3)->get();

        return view('our-collections.animals.animals-desc', compact('animals', 'relatedAnimals'));
    }

    //PLANTS
    public function plantsCollection()
    {
        $categories = PlantsCategory::all();

        $defaultCategoryId = $categories->first()->id;
        $plantCategory = PlantsCategory::findOrFail($defaultCategoryId);
        $plants = Plants::where('category_id', $defaultCategoryId)->get();
        $carousel = Plants::all();

        return view('our-collections.plants.plants', compact('plantCategory', 'categories', 'plants', 'carousel'));
    }

    public function plantCategory($category)
    {
        $plantCategory = PlantsCategory::findOrFail($category);
        $categories = PlantsCategory::all();
        $carousel = Plants::all();

        $plants = Plants::where('category_id', $plantCategory->id)->get();

        return view('our-collections.plants.plants', compact('plantCategory', 'categories', 'plants', 'carousel'));
    }

    public function plantDesc($id)
    {
        $plants = Plants::where('id', $id)->get();
        $relatedPlants = Plants::inRandomOrder()->take(3)->get();

        return view('our-collections.plants.plants-desc', compact('plants', 'relatedPlants'));
    }

}