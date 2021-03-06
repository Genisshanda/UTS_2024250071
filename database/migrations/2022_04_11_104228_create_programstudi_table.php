<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramstudiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programstudi', function (Blueprint $table) {
            $table->id();

            $table->string("kode_prodi", 4);
            $table->string("nama_prodi",50);
            $table->text("alamat");
            $table->string("tlp",15);
            $table->string("website",255);
             $table->foreignId('id_fakultas');
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
        Schema::dropIfExists('programstudi');
    }
}
