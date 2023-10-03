<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Автоинкрементируемый первичный ключ
            $table->string('name'); // Поле 'name' типа VARCHAR
            $table->string('products');
            $table->string('query');
            $table->timestamps(); // Добавляет поля 'created_at' и 'updated_at'
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
