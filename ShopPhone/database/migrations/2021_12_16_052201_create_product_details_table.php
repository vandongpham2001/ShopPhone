<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productDetails', function (Blueprint $table) {
            $table->id();
            $table->string('ROM');
            $table->string('RAM');
            $table->string('CPU');
            $table->string('ManHinh');
            $table->string('Pin');
            $table->string('Camera');
            $table->string('Color');
            $table->integer('DonGia');
            $table->integer('SoLuong');
            $table->longText('description');
            $table->unsignedBigInteger('product_id');
            $table->timestamps();
            $table->foreign('product_id')->references('id')->on('products')->onUpdate('restrict')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productDetails');
    }
}
