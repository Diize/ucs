<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Albums;
use App\Models\Images;

class SpecificAlbumController extends Controller
{

    public function getData($id) {
        $data = Http::get('https://jsonplaceholder.typicode.com/albums')->json(); 
        $pictures = Http::get('https://jsonplaceholder.typicode.com/photos')->json();
        return view('albumdisplay', ['data' => $data, 'id' => $id, 'pictures' => $pictures]);
    }

    public function selectAlbum($id) {
        $pictures = Images::where('albumId', '=', $id)->get();
        $album = Albums::find($id);
        return view('albumdisplay', ['album' => $album, 'id' => $id, 'pictures' => $pictures]);
    }

}
