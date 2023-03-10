<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_pesanan', function (Blueprint $table) {
            $table->id('id_pesanan');
            $table->string('nama');
            $table->string('alamat');
            $table->integer('no_telp');
            $table->string('jenis_cake');
            $table->integer('jumlah_cake');
            $table->integer('total_harga');
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
        Schema::dropIfExists('tabel_pesanan');
    }
};
