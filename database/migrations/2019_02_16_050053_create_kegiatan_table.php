<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKegiatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->increments('kegId');
            $table->string('kegNamaAcara');
            $table->dateTime('kegWaktu');
            $table->string('kegTempat');
            $table->string('kegPenyelenggara');
            $table->string('kegPengisi');
            $table->text('kegKeterangan');
            $table->string('kegFoto');
            $table->enum('status', ["Publish", "Draft"]);
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
        Schema::dropIfExists('kegiatan');
    }
}
