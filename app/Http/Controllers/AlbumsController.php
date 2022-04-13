<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Albums;
use App\Models\Images;

class AlbumsController extends Controller
{
    public function fetch() {

        $data = Albums::all();
        return view('welcome', ['data' => $data]);
        
    }
    
    public function addData()
  {
      
    $albumdata = Http::get('https://jsonplaceholder.typicode.com/albums')->json();
    foreach ($albumdata as $p) {
        Albums::create([
    'title' => $p['title'],
         'id' => $p['id'],
]);
}

$photodata = Http::get('https://jsonplaceholder.typicode.com/photos')->json();
    foreach ($photodata as $p) {
        Images::create([
    'title' => $p['title'],
     'id' => $p['id'],
    'albumId' => $p['albumId'],
     'thumbnailUrl' => $p['thumbnailUrl'],
    'url' => $p['url'],
]);
}


}






}
