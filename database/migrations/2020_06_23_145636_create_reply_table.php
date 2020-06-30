<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReplyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reply', function (Blueprint $table) {
            //流水號
            $table->increments('r_id');
            //回應訊息ID
            $table->integer('r_mid');
            //回應使用者ID
            $table->integer('r_uid');
            //留言內容
            $table->text('r_text');
            //新增時間
            $table->datetime('r_add_datetime');
            //修改時間
            $table->datetime('r_mod_datetime');
            //軟刪除
            $table->tinyInteger('r_del');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reply');
    }
}
