<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jamsesis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sesi');
            $table->dateTime('Waktu_mulai')->format('H:m:s');
            $table->dateTime('Waktu_selesai')->format('H:m:s');
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
        Schema::dropIfExists('jamsesis');
    }
};
