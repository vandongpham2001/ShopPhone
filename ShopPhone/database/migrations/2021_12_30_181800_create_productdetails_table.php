<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productdetails', function (Blueprint $table) {
            $table->id();
            $table->string('ROM')->nullable();
            $table->string('RAM')->nullable();
            $table->string('CPU')->nullable();
            $table->string('ManHinh')->nullable();
            $table->string('Pin')->nullable();
            $table->string('Camera')->nullable();
            $table->string('Color')->nullable();
            $table->integer('DonGia');
            $table->integer('SoLuong');
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('productdetails');
    }
}
