<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();//主キー
            $table->foreignId('user_id')->constrained();//userキー
            $table->foreignId('qualification_id')->constrained();//qualiキー
            $table->string('period');//期間
            $table->string('time');//いつ
            $table->string('how');//何回
            $table->string('profession');//職業
            $table->string('purpose');//目的
            $table->string('material');//教材
            $table->text('body');//本文
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
        Schema::dropIfExists('experiences');
    }
}
