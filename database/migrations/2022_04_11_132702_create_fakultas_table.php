<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFakultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fakultas', function (Blueprint $table) {
            $table->id();
            $table->increments('id'); 
            $table->string("kode_fakultas",4);
            $table->string("nama_fakultas",50);
            $table->text("text")->nullable();
            $table->string("tlp",15)->nullable();
            $table->string("website",255)->nullable();
            $table->foreignId('id_isntitusi');
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
        Schema::dropIfExists('fakultas');
    }
}
