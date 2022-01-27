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
            $table->string('name')->unique()->nullable(false); // NullAble >> required field
            $table->text('description')->nullable(false);
            $table->string('age');
            $table->text('details')->nullable(true);
            $table->string('brand')->nullable(true);
            $table->string('sex')->nullable(true);
            $table->double('price')->nullable(false);
            $table->double('regularPrice');
            $table->string('category');
            $table->double('quantity');
            $table->double('shipping_cost')->nullable(true);
            $table->string('image_path')->nullable(false);
            $table->string('product_image')->nullable(true);
            $table->string('side_image')->nullable(true);
            $table->string('man_image')->nullable(true);
            $table->string('women_image')->nullable(true);
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
