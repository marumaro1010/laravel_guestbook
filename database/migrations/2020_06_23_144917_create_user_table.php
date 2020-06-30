<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            //流水號
            $table->increments('u_id');
            //使用者類別(0.一般會員 1.系統管理員)
            $table->integer('u_type');
            //使用者名字
            $table->string('u_name',20);
            //註冊時間
            $table->datetime('u_add_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
