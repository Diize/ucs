<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Albums;
use App\Models\Images;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
             $table->integer('albumId');
             $table->string('title');
             $table->string('url');
             $table->string('thumbnailUrl');
        });


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

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
