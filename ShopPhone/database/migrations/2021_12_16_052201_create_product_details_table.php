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
        Schema::create('product_details', function (Blueprint $table) {
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
            $table->integer('product_id');
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
        Schema::dropIfExists('product_details');
    }
}
