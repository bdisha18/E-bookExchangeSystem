<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->bigIncrements('offer_id');
            $table->integer('category_id');
            $table->integer('book_id');
            $table->string('offer_title');
            $table->string('offer_image');
            $table->text('offer_description');
            $table->text('termsconditions');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('discount_amount');
            $table->enum('status',['active','inactive']);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
}
