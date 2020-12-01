<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\CookbookController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\IncredientController;

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
    return view('start');
});

Route::get('home', function () {
    return view('start');
});

Route::get("authors", [AuthorController::Class, "index"])->name('authors');
Route::post("authors", [AuthorController::Class, "store"])->name('authors.store');
Route::get("authors/create", [AuthorController::Class, "create"])->name('authors.create');
Route::get("authors/{author}", [AuthorController::Class, "show"])->name('authors.show');

Route::get("publishers", [PublisherController::Class, "index"])->name('publishers');
Route::post("publishers", [PublisherController::Class, "store"])->name('publishers.store');
Route::get("publishers/create", [PublisherController::Class, "create"])->name('publishers.create');
Route::get("publishers/{publisher}", [PublisherController::Class, "show"])->name('publishers.show');

Route::get("cookbooks", [CookbookController::Class, "index"])->name('cookbooks');
Route::post("cookbooks", [CookbookController::Class, "store"])->name('cookbooks.store');
Route::get("cookbooks/create", [CookbookController::Class, "create"])->name('cookbooks.create');
Route::get("cookbooks/{cookbook}", [CookbookController::Class, "show"])->name('cookbooks.show');

Route::get("recipes", [RecipeController::Class, "index"])->name('recipes');
Route::post("recipes", [RecipeController::Class, "store"])->name('recipes.store');
Route::get("recipes/create", [RecipeController::Class, "create"])->name('recipes.create');
Route::get("recipes/{recipe}", [RecipeController::Class, "show"])->name('recipes.show');

Route::get("incredients", [IncredientController::Class, "index"])->name('incredients');
Route::post("incredients", [IncredientController::Class, "store"])->name('incredients.store');
Route::get("incredients/create", [IncredientController::Class, "create"])->name('incredients.create');
Route::get("incredients/{incredient}", [IncredientController::Class, "show"])->name('incredients.show');
Route::get("incredients/{incredient}/edit", [IncredientController::Class, "edit"])->name('incredients.edit');
Route::put("incredients/{incredient}", [IncredientController::Class, "update"])->name('incredients.update');;
