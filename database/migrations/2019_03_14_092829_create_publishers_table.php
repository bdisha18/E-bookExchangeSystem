<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublishersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publishers', function (Blueprint $table) {
            $table->bigIncrements('publisher_id');
            $table->integer('user_id');
            $table->string('publisher_name');
            $table->string('books_published')->nullable();
            $table->string('publish_bookname')->nullable();
            $table->integer('book_id');
            $table->enum('status',['active','inactive']);
            $table->string('image');
            $table->string('book_category');
            
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
        Schema::dropIfExists('publishers');
    }
}
