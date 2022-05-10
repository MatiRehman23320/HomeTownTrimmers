<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barbers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Barber_Name');
            $table->string('Shop_Name');
            $table->text('description');
            $table->string('address');
            $table->string('file');
            $table->float('lat', 10, 6);
            $table->float('lng', 10, 6);
            $table->unsignedInteger('user_id');
            $table->timestamps();

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
        Schema::dropIfExists('barbers');
    }
}
