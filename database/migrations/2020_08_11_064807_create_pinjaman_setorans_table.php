<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePinjamanSetoransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjaman_setoran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tgl_setoran');
            $table->unsignedBigInteger('pinjaman_id');
            $table->string('setoran_pokok');
            $table->string('setoran_bunga');
            $table->string('denda');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('pinjaman_id')->references('id')->on('pinjaman')
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
        Schema::dropIfExists('pinjaman_setoran');
    }
}
