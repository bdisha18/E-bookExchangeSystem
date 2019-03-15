<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->string('fname');
            $table->string('lname');
            $table->string('username');
            $table->string('password');
            $table->string('email')->unique();
            $table->integer('contactno')->nullable();
           $table->string('image')->nullable();
           $table->string('category');
            $table->string('gender');
           $table->date('dob');
            $table->string('gmail_link')->nullable();
            $table->string('fb_link')->nullable();
            $table->enum('status',['active','inactive']);
           
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
        Schema::dropIfExists('members');
    }
}
