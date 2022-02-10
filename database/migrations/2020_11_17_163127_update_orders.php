<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->unsignedInteger('delivery_id')->nullable();
            $table->foreign('delivery_id')->references('id')->on('deliveries')->constrained()->onDelete('set null')->nullable();
            $table->unsignedInteger('payment_id')->nullable();
            $table->foreign('payment_id')->references('id')->on('payments')->constrained()->onDelete('set null')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('orders');
    }
}
