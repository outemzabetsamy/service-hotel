<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotells', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NomHotel');
            $table->string('AdresseHotel');
            $table->string('SiteWebHotel');
            $table->string('PhotoHotel');
         $table->integer('nbEtoiles');
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
        Schema::dropIfExists('hotells');
    }
}
