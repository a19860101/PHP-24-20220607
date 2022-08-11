<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('orderId',12);
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained();
            $table->foreignId('product_id')->constrained();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.

     * @return void
     */
    public function down()
    {
        Schema::table('orders',function(Bluepring $table){
            $table->dropForeign(['user_id']);
        });
        Schema::table('order_details',function(Bluepring $table){
            $table->dropForeign(['order_id']);
            $table->dropForeign(['product_id']);
        });
        Schema::dropIfExists('orders');
        Schema::dropIfExists('order_details');
    }
}
