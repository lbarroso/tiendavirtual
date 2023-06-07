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
            
            $table->id(); // 1
            $table->string('isbn',20); // 2
            $table->string('clave'); // 3
            $table->text('title'); // 4
            $table->string('servicio'); // 5
            $table->smallInteger('invmin'); // 6
            $table->smallInteger('invmax'); // 7
            $table->decimal('price'); // 8
            $table->decimal('precio1'); // 9
            $table->decimal('precio2'); // 10
            $table->decimal('mayoreo2'); // 11
            $table->decimal('precio3'); // 12
            $table->decimal('mayoreo3'); // 13
            $table->decimal('precio4'); // 14
            $table->decimal('mayoreo4'); // 15
            $table->unsignedInteger('stock'); // 16
            $table->decimal('peso'); // 17
            $table->longText('description'); // 18
            $table->text('category'); // 19
            $table->text('genre'); // 20
            $table->text('receta'); // 21
            $table->text('granel'); // 22
            $table->text('impuesto'); // 23
            $table->text('impiva'); // 24
            $table->text('impiva0'); // 25 
            $table->text('impiva1'); // 26
            $table->text('impiva2'); // 27 
            $table->smallInteger('news'); // 28
            $table->smallInteger('sellers'); // 29

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
        Schema::dropIfExists('products');
    }
}
