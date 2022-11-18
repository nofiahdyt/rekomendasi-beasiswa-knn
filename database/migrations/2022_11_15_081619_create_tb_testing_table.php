<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbTestingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_testing', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama', 10);
            $table->double('ipk');
            $table->integer('smt');
            $table->integer('penghasilan');
            $table->string('status', 10);
            $table->string('label', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_testing');
    }
}
