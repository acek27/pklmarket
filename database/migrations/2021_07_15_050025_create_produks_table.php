<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->string('deskripsi')->nullable();
            $table->integer('harga');
            $table->string('foto_produk')->nullable();
            $table->bigInteger('kategori_id')->unsigned();
            $table->foreign('kategori_id')->references('id')
                ->on('kategoris')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('lapak_id')->unsigned();
            $table->foreign('lapak_id')->references('id')
                ->on('lapaks')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produks');
    }
}
