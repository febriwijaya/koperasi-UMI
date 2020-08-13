<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSimpananTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simpanan_transaksi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tgl_transaksi');
            $table->unsignedBigInteger('simpanan_id');
            $table->string('debit');
            $table->string('kredit');
            $table->text('keterangan');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('simpanan_id')->references('id')->on('simpanan')
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
        Schema::dropIfExists('simpanan_transaksi');
    }
}
