<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('book_id');
            $table->string('category');
            $table->string('book_name');
            $table->string('book_image');
            $table->string('author_name');
            $table->integer('book_rating')->nullable();
            $table->integer('publisher_name');
            $table->integer('book_price');
            $table->text('description');
            $table->integer('pages');
            $table->integer('book_available');
             $table->string('file');
            $table->enum('status',['available','soldout']);
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
        Schema::dropIfExists('books');
    }
}
