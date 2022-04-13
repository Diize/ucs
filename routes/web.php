<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumsController;
use App\Http\Controllers\SpecificAlbumController;


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', "App\Http\Controllers\AlbumsController@fetch");
Route::get('/album/{id}', "App\Http\Controllers\SpecificAlbumController@selectAlbum");

// Route::get('playground', function () {
//     return view('playground');
// });
