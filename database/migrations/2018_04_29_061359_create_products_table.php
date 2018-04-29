<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->bigInteger('users_id')                      ->comment('save user p.key.');
            $table->integer('main_categories')                  ->comment('save main categories.');
            $table->integer('sub_categories')                   ->comment('save sub categories.');
            $table->string('product_name')                      ->comment('save name of product.');
            $table->string('brand')                             ->comment('save brand of product.');
            $table->text('description')     ->nullable()        ->comment('save description of product.');
            $table->string('photo')                             ->comment('save photo of product.');
            $table->string('price')                             ->comment('save price of product.');
            $table->string('condition')                         ->comment('save condition of product.');
            $table->tinyInteger('sale')     ->default(0)        ->comment('save types of product. (sold or not)');
            $table->timestamps();
            $table->tinyInteger('deleted')  ->default(0)        ->comment('save types of product. (deleted or not)');
            $table->charset     = 'utf8mb4';
            $table->collation   = 'utf8mb4_unicode_ci';
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
