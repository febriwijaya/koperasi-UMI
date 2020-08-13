<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePinjamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjaman', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tgl_pinjaman');
            $table->unsignedBigInteger('jenis_pinjaman_id');
            $table->unsignedBigInteger('nasabah_id');
            $table->text('keterangan');
            $table->string('lama_pinjaman');
            $table->string('besar_pinjaman');
            $table->string('angsuran_pokok');
            $table->string('angsuran_bunga');
            $table->string('bunga');
            $table->string('administrasi');
            $table->string('status');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('jenis_pinjaman_id')->references('id')->on('jenis_pinjaman')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->foreign('nasabah_id')->references('id')->on('nasabah')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pinjaman');
    }
}
