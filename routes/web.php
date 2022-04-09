<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/', "App\Http\Controllers\AlbumsController@fetch");

// Route::get('/{id}', function ($id) {
//     return view('albumdisplay', ['id'=>$id]);
// });

Route::get('/album/{id}', "App\Http\Controllers\SpecificAlbumController@getData");
