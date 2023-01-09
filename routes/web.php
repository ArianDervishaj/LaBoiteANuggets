<?php

use App\Http\Controllers\RecipeController;
use App\Http\Controllers\UserController;
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
Route::get('/', function () {
    return redirect()->to('/recipes');
});

//show all recipes
Route::get('/recipes', [RecipeController::class, 'index']);

//Show create form
Route::get('/recipes/create', [RecipeController::class, 'create']);

//Store a recipe in the database
Route::post('/recipes', [RecipeController::class, 'store']);

//Show Edit Form
Route::get('/recipes/{slug}/edit', [RecipeController::class, 'edit']);

Route::delete('/recipes/{slug}', [RecipeController::class, 'destroy']);

//Edit submit to update
Route::put('/recipes/{slug}', [RecipeController::class, 'update']);

//show one recipe
Route::get('/recipes/{slug}', [RecipeController::class, 'show']);

//Show all categories
Route::get('/categories', function () {
    return view('categories');
});

//Show register form
Route::get('/register', [UserController::class, 'create']);

//Create new user
Route::post('/users', [UserController::class, 'store']);

//Logout
Route::post('/logout', [UserController::class, 'logout']);

//Show Login form
Route::get('/login', [UserController::class, 'login']);

//Log in user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);