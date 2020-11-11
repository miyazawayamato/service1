<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sihousyosi_tables', function (Blueprint $table) {
            //追加 勉強期間　いつ　何回　職業　目的　教材
            $table->string('period');
            $table->string('time');
            $table->string('how');
            $table->string('profession');
            $table->string('purpose');
            $table->string('material');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sihousyosi_tables', function (Blueprint $table) {
            //
        });
    }
}
