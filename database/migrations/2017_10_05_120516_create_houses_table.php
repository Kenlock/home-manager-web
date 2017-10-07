<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->decimal('rate', 15, 5);
            $table->integer('max_guests');
            $table->integer('max_parking');
            $table->integer('bathrooms');
            $table->integer('area'); // in square metres
            $table->longText('desc');
            $table->string('type');

            $table->integer('addr_id')->unsigned();
            $table->foreign('addr_id')->references('id')->on('addresses')->onDelete('cascade');

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
        Schema::dropIfExists('houses');
    }
}
