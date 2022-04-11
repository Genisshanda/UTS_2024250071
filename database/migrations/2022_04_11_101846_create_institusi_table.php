<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitusiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institusi', function (Blueprint $table) {
            $table->id();
            $table->string("kode_institusi", 4);
            $table->string("nama", 50);
            $table->text("alamat");
            $table->string("telp",15)->nullable();
            $table->string("website", 255)->nullable();
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
        Schema::dropIfExists('institusi');
    }
}
