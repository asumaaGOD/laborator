<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHolboltsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holbolts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ovog')->nullable();
            $table->string('ner')->nullable();
            $table->string('kod')->nullable();
            $table->string('mergejil')->nullable();
            $table->integer('elssen_on')->nullable();
            $table->timestamps();

        });
    }
};
   
    


