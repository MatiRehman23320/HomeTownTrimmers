<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('barber_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->string('name')->nullable();
            $table->string('cus_address')->nullable();
            $table->string('time')->nullable();
            $table->string('phone')->nullable();
            $table->string('Day')->nullable();
            $table->string('status')->nullable();

            $table->index('barber_id');
            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
