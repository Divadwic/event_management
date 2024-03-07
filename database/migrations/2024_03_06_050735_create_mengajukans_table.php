<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMengajukansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mengajukans', function (Blueprint $table) {
            $table->id();
            $table->text('judul_acara');
            $table->text('file_proposal');
            $table->text('lampiran_peserta');
            $table->integer('id_pengaju');
            $table->integer('id_jeniskegiatan');
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
        Schema::dropIfExists('mengajukans');
    }
}
