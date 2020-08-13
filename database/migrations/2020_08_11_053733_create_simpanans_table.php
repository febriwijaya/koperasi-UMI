<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSimpanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simpanan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tgl_simpanan');
            $table->unsignedBigInteger('nasabah_id');
            $table->unsignedBigInteger('jenis_simpanan_id');
            $table->text('keterangan');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('nasabah_id')->references('id')->on('nasabah')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->foreign('jenis_simpanan_id')->references('id')->on('jenis_simpanan')
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
        Schema::dropIfExists('simpanan');
    }
}
