<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lots', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
//            $table->string('image_url');
            $table->string('title');
            $table->text('description');
//            $table->string('user_email');
            $table->float('highest_bid');
            $table->float('starting_price');
            $table->string('country');
            $table->string('city');
            $table->string('address');
            $table->dateTime('posted_at');
            $table->dateTime('expired_at');
            $table->enum('status', ['approved', 'pending', 'blocked'])->default('pending');
//            $table->string('category');
//            $table->string('payment_method');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lots');
    }
}
