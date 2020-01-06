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
                $table->bigIncrements('id')->unique();
                $table ->string ('tenthanhvien');
                $table ->string ('vaitro');
                $table->string('chucnang');
                $table->string('tencongviec');
                $table->string ('nhiemvu');
                $table->string ('tiendo') ->nullable();
                $table->string ('mucdohoanthanh')->nullable();
                $table->string ('noidung')->nullable();
                $table->string ('upload_hinhanh')->nullable();
                $table->string ('upload_file')->nullable();
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
