<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_models',
            function (Blueprint $table) {
                $table->integer('id_member');
                $table ->string ('nguoithuchien');
                $table->string('Tiendo');
                $table->string('mucdoHoanthanh');
                $table->string ('noidung');
                $table->string ('upload_hinhanh');
                $table->string ('upload_file');
//                $table->foreign('id_member')->references('id')->on('du_ans');
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
        Schema::dropIfExists('member_models');
    }
}
