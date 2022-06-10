<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $comics = config('db.comics');
    //dd($comics);
    return view('comics', compact('comics'));
})->name('comics');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');


Route::get('/comics/{id}', function ($id) {
    $comics = config('db.comics');

    if(is_numeric($id) && ($id < count($comics) && $id >= 0)){

        $comic = $comics[$id];

        return view('comic', ['comic' => $comic]);
    }

    abort('404');
})->name('comic');
