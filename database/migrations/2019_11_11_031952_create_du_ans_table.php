<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDuAnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('du_ans', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('tenduan');
            $table->string('cacchucnang');
            $table->string ("tencongviec");
            $table->string('nhiemvu');
            $table->string('ngaybatdau');
            $table->string('ngayketthuc');
            $table->integer('id_member')->unsigned();
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
        Schema::dropIfExists('du_ans');
    }
}
