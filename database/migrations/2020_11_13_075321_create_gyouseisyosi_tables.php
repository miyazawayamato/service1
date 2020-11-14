<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGyouseisyosiTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gyouseisyosi_tables', function (Blueprint $table) {
            $table->bigIncrements('qualiexp_id'); 
            $table->text('body');
            //追加 勉強期間　いつ　何回　職業　目的　教材
            $table->string('period');
            $table->string('time');
            $table->string('how');
            $table->string('profession');
            $table->string('purpose');
            $table->string('material');
            $table->timestamps();
            //外部キー制約
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gyouseisyosi_tables', function (Blueprint $table) {
            //
        });
    }
}
