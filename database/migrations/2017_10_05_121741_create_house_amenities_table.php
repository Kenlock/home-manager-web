<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHouseAmenitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('house_amenities', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('house_id')->unsigned();
            $table->foreign('house_id')->references('id')->on('houses')->onDelete('cascade');

            $table->integer('amenity_id')->unsigned();
            $table->foreign('amenity_id')->references('id')->on('amenities')->onDelete('cascade');

            $table->unique(array('house_id', 'amenity_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('house_amenities');
    }
}
