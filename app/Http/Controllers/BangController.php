<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class BangController extends Controller
{
 
    public function createTable(){
        Schema::create('products',function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->integer('price');
            $table->mediumText('content');
            $table->boolean('active');
            $table->timestamps();

        });
        Schema::create('types',function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->integer('price');
            $table->mediumText('content');
            $table->boolean('active');
            $table->timestamps();

        });
        echo('tạo thành công');
    }
};


       
