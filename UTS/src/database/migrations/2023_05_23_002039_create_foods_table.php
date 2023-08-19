<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodsTable extends Migration
{
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('foodname');
            $table->string('customernote');
            $table->integer('price');
            $table->integer('amount');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
