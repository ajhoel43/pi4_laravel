<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventarisBrgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaris_brgs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->enum('lokasi', ['Jakarta', 'Depok', 'Bogor']);
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
        Schema::drop('inventaris_brgs');
    }
}
