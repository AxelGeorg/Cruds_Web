<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesenvolvedorsTable extends Migration
{
    public function up()
    {
        Schema::create('desenvolvedores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('cargo');
            $table->timestamps();
        });      
    }

    public function down()
    {
        Schema::dropIfExists('desenvolvedores');
    }
}
