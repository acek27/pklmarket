<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLapakKurirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lapak_kurir', function (Blueprint $table) {
            $table->bigInteger('lapak_id')->unsigned();
            $table->foreign('lapak_id')->references('id')
                ->on('lapaks')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('kurir_id')->unsigned();
            $table->foreign('kurir_id')->references('id')
                ->on('kurirs')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lapak_kurir');
    }
}
