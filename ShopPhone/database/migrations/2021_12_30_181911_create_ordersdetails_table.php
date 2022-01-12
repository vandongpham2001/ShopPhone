<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordersdetails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('productDetail_id');
            $table->integer('soLuong');
            $table->integer('giaMua');
            $table->timestamps();
            $table->foreign('order_id')->references('id')->on('orders')->onUpdate('restrict')->onDelete('cascade');
            $table->foreign('productDetail_id')->references('id')->on('productdetails')->onUpdate('restrict')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordersdetails');
    }
}
