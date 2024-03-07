<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pengaju', 50);
            $table->string('email', 50);
            $table->char('no_telp', 13);
            $table->string('level', 50);
            $table->text('nama_instansi');
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
        Schema::dropIfExists('pengajus');
    }
}
