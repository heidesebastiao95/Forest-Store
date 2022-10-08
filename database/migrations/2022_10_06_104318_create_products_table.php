<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->unsignedBigInteger('seller_id');
            $table->unsignedBigInteger('category_id');
            $table->integer('price');
            $table->integer('descount')->default(0);
            $table->integer('hearts')->default(0);
            $table->text('long_desc');
            // $table->string('short_desc',20);
            $table->text('img');
            $table->timestamps();

            $table->foreign('category_id')
                    ->references('id')
                    ->on('product_categories')
                    ->onDelete('cascade');

            $table->foreign('seller_id')
                    ->references('id')
                    ->on('users')
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
        Schema::dropIfExists('products');
    }
};
