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
               $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable();
             $table->unsignedBigInteger('payment_id')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('name');
            $table->string('phone_no');
            $table->text('Shipping_address');
            $table->string('email')->nullable();
            $table->string('shipping_charge')->nullable();
            $table->string('custom_discount')->nullable();


            $table->text('message')->nullable();
            $table->boolean('is_paid')->default(0);
            $table->boolean('is_completed')->default(0);
            $table->boolean('is_seen_by_admin')->default(0);
               $table->string('transaction_id')->nullable();
            $table->timestamps();

        $table->foreign('user_id')
      ->references('id')->on('users')
      ->onDelete('cascade');

          $table->foreign('payment_id')
      ->references('id')->on('payments')
      ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
