<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message', function (Blueprint $table) {
            //流水號
            $table->increments('m_id');
            //留言的使用者ID
            $table->integer('m_uid');
            //留言內容
            $table->text('m_text');
            //新增時間
            $table->datetime('m_add_datetime');
            //修改時間
            $table->datetime('m_mod_datetime');
            //軟刪除
            $table->tinyInteger('m_del');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('message');
    }
}
