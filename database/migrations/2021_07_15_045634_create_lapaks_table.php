<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLapaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lapaks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_toko');
            $table->string('deskripsi')->nullable();
            $table->string('lokasi');
            $table->string('foto_lapak')->nullable();
            $table->bigInteger('seller_id')->unsigned();
            $table->foreign('seller_id')->references('id')
                ->on('sellers')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('lapaks');
    }
}
