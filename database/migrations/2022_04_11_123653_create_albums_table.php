<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Albums;
use App\Models\Images;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });

        $albumdata = Http::get('https://jsonplaceholder.typicode.com/albums')->json();
    foreach ($albumdata as $p) {
        Albums::create([
    'title' => $p['title'],
         'id' => $p['id'],
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
        Schema::dropIfExists('albums');
    }
}
