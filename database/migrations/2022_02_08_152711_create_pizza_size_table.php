<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePizzaSizeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pizza_size', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('pizza_id');
            $table->foreign('pizza_id')
                    ->references('id')
                    ->on('pizzas')
                    ->onDelete('cascade');

            $table->unsignedBigInteger('size_id');
            $table->foreign('size_id')
                    ->references('id')
                    ->on('sizes')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pizza_size');
    }
}
