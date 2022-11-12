<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour', function (Blueprint $table) {
            $table->id();
            $table->string('ten_tour');
            $table->unsignedBigInteger('id_tinh');
            $table->unsignedBigInteger('id_diadiem');
            $table->unsignedBigInteger('id_loaitour');
            $table->string('phuong_tien');
            $table->tinyInteger('so_luong_toi_da');
            $table->tinyInteger('so_ngay');
            $table->tinyInteger('so_dem');
            $table->integer('gia_nguoi_lon');
            $table->integer('gia_tre_em');
            $table->text('mo_ta_tour');
            $table->text('lich_trinh');
            $table->timestamps();

            $table->foreign('id_tinh')->references('id_tinh')->on('tinh')->onDelete('cascade');
            $table->foreign('id_diadiem')->references('id')->on('diadiem')->onDelete('cascade');
            $table->foreign('id_loaitour')->references('id')->on('loaitour')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tour');
    }
}