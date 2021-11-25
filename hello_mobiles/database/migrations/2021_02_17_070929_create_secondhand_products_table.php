<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecondhandProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secondhand_products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');
            // $table->bigInteger('price');
            $table->string('description');
            $table->foreignId('user_id');
            $table->boolean('warrenty');
            $table->date('expire_date');
            $table->boolean('show_detail');
            $table->boolean('status')->default(0);
            $table->foreignId('approved_by')->nullable();
            


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('secondhand_products');
    }
}
