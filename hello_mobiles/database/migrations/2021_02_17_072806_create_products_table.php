<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');
            $table->integer('discount');
            $table->boolean('available_status')->default(true);
            $table->integer('selling_price');
            $table->string('description');
            $table->string('image');
            $table->foreignId('subcategory_id');
            $table->timestamps();
        });
    }

    //     Schema::table('products', function (Blueprint $table){
    //         $table->foreign('category_id')->references('id')->on('categories');
    //      });
    // }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
