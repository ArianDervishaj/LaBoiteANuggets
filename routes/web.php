<?php

use Illuminate\Support\Facades\Route;
use App\Models\Recipe;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/recipes', function () {
    return view('recipes', [
        'heading' => 'Latest Recipes',
        'recipes' => Recipe::all()
    ]);
});

Route::get('/recipes/{slug}', function ($slug) {
    return view('recipe', [
        'recipe' => Recipe::find($slug)
    ]);
});