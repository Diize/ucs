<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SpecificAlbumController extends Controller
{

    public function getData($id) {
          
        $data = Http::get('https://jsonplaceholder.typicode.com/albums')->json(); 
        $pictures = Http::get('https://jsonplaceholder.typicode.com/photos')->json();
        return view('albumdisplay', ['data' => $data, 'id' => $id, 'pictures' => $pictures]);

        
    }

}
