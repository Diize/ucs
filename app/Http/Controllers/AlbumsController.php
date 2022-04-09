<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AlbumsController extends Controller
{
    public function fetch() {

        $data = Http::get('https://jsonplaceholder.typicode.com/albums')->json(); 
        return view('welcome', ['data' => $data]);
        
    }
}
