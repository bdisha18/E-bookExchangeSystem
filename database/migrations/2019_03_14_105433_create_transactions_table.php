<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('transaction_id');
            $table->integer('user_id');
            $table->integer('amount');
            $table->integer('reference_id');
            $table->string('payment_method');
            $table->integer('card_no');
            $table->enum('status',['paid','pending','declined']);
             $table->integer('order_id');
             $table->string('bank_name');
            $table->integer('total_cashback')->nullable();
            $table->string('card_holder_name');
            $table->date('expire_date');
            $table->integer('discount')->nullable();
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
        Schema::dropIfExists('transactions');
    }
}
