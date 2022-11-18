<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama', 50);    
            $table->string('npm', 10);    
            $table->string('alamat', 50);    
            $table->string('jk', 2);    
            $table->date('tgl_lahir');    
            $table->string('tempat_lahir', 50);    
            $table->string('semester', 2);    
            $table->string('status_perkawinan', 7);    
            $table->double('ipk');    
            $table->integer('penghasilan');    
            $table->string('email', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_mahasiswa');
    }
}
