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
            $table->string('ProductId');
            $table->string('ProductName');
            $table->string('ProductText');
            $table->string('ProductCategory');
            $table->string('ProductBrand');
            $table->string('SellingPrice');
            $table->longText('Description');
            $table->string('ProductCount');
            $table->string('ProductImage');
            $table->string('FrontView');
            $table->string('Status')->default(0);
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
