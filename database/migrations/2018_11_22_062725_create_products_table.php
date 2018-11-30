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
            $table->increments('id');
            $table->unsignedInteger('category_id')->unsigned();
            $table->unsignedInteger('brand_id')->unsigned();
            $table->string('tittle');
            $table->text('description');
            $table->string('slug');
            $table->float('quantity')->default(1);
            $table->float('price');
            $table->tinyInteger('status')->default(0);
            $table->float('offer_price')->nullable();
            $table->unsignedInteger('admin_id')->unsigned()->nullable();
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
