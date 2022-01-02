<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoMetroOltTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sto_tbl', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sto_name');
            $table->timestamps();
        });
        Schema::create('metro_tbl', function (Blueprint $table) {
            $table->increments('id');
            $table->string('metro_name');
            $table->string('metro_port');
            $table->string('metro_ip');            
            $table->timestamps();
        });
        Schema::create('olt_tbl', function (Blueprint $table) {
            $table->increments('id');
            $table->string('olt_name');
            $table->string('olt_port');  
            $table->string('olt_ip');          
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
       Schema::drop('sto_tbl');
       Schema::drop('metro_tbl');
       Schema::drop('olt_tbl');
    }
}
