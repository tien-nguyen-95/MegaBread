<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_bill')->unsigned()->nullable();
            $table->foreign('id_bill')->references('id')->on('bills');
            $table->integer('id_product')->unsigned()->nullable();
            $table->foreign('id_product')->references('id')->on('products');
            $table->integer('quantity')->unsigned()->nullable();
            $table->double('unit_price')->nullable();
            $table->string('user_created')->nullable();
            $table->string('user_updated')->nullable();
            $table->string('user_deleted')->nullable();
            $table->timestamps();
            $table->softDeletes()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bill_detail');
    }
}
