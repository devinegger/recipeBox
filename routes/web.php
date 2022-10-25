<?php

use App\Models\Recipe;
use Illuminate\Support\Facades\Route;

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

    return view('recipes', [
        'recipes' => Recipe::all()
    ]);

});

Route::get('/recipes', function () {
    return redirect('/');
});

Route::get('recipe/{id}', function($id) {

    return view('recipe', [
        'recipe' => Recipe::find($id)
    ]);

})->whereNumber('id');