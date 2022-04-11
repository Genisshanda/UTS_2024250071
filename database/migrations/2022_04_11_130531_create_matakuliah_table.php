<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatakuliahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matakuliah', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_prodi');
            $table->string("kode_mk");
            $table->string("nama_mk");
            $table->integer('sks_mk');
            $table->integer('sks_praktik');
            $table->integer('sks_teori');
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
        Schema::dropIfExists('matakuliah');
    }

    /* pak untuk semua migratioan tablenya tidak terbuat ketika di migrate yang hanya terbuat table migration */
    
}
