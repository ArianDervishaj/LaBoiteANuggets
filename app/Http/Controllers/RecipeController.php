<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RecipeController extends Controller
{
    //Show all recipes
    public function index() {

        request('category');

        return view('recipes.index', [
            'recipes' => Recipe::latest()->filter(request(['category', 'search']))->paginate(10)
        ]);
    }

    //Show single recipe
    public function show(String $slug) {

        $recipe = Recipe::find($slug);
        $showIngredients = true;
        if($recipe){
            return view('recipes.show', [
                'recipe' => $recipe,
                'showIngredients' => $showIngredients,
            ]);
        }else{
            abort('404');
        }

    }

    //Show create form
    public function create(){
        return view('recipes.create');
    }

    //Store a recipe
    public function store(Request $request){
        $formFields = $request->validate([
            'title' => 'required',
            'slug' => ['required', Rule::unique('recipes', 'slug')],
            'ingredients' => 'required',
            'category' => 'required',
            'instructions' => 'required',
        ]);

        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        Recipe::create($formFields);



        return redirect('/recipes')->with('message', 'Recette crée !');
    }

    //Show edit form
    public function edit(String $slug){
        $recipe = Recipe::find($slug);
        return view('recipes.edit', ['recipe' => $recipe]);
    }

    public function update(Request $request, String $slug){
        $recipe = Recipe::find($slug);

        $formFields = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'ingredients' => 'required',
            'category' => 'required',
            'instructions' => 'required',
        ]);

        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        $recipe->update($formFields);

        return back()->with('message', 'Recette modifée !');
    }

    //Delete recipe
    public function destroy(String $slug){
        $recipe = Recipe::find($slug);

        $recipe->delete();

        return redirect('/recipes')->with('message', 'Recette supprimée');

    }
}
