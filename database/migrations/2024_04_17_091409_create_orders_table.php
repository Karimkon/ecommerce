<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id');
            $table->string('first_name', 50)->nullable();
            $table->string('last_name', 50)->nullable();
            $table->string('company_name', 100)->nullable();
            $table->string('country', 50)->nullable();
            $table->string('address_one', 100)->nullable();
            $table->string('address_two', 100)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('state', 100)->nullable();
            $table->string('postcode', 100)->nullable();
            $table->string('phone')->nullable();
            $table->string('email', 168)->nullable();
            $table->text('note')->nullable();
            $table->string('discount_code')->nullable();
            $table->integer('shipping_id')->nullable();
            $table->string('shipping_amount', 25)->default('0');
            $table->string('total_amount', 25)->default('0');
            $table->string('payment_method', 25)->nullable();
            $table->string('discount_amount', 25)->default('0');
            $table->tinyInteger('status')->default(0)->comment('0 = Pending
1 = In Progress
2 = Delivered
3 = Completed
4 Cancelled');
            $table->tinyInteger('is_delete')->default(0);
            $table->tinyInteger('is_payment')->default(0);
            $table->string('transaction_id', 254)->nullable();
            $table->string('stripe_session_id', 254)->nullable();
            $table->string('order_number', 254)->nullable();
            $table->text('payment_data')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
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
};
