<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Board;
use App\Models\Gyouseisyosiboard;

class BoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Board::factory(20)->create();
        // $inst = new Gyouseisyosiboard([
        //     'name' => '行政掲示',
        //     'message' => '行政書士の掲示板です行政書士の掲示板です行政書士の掲示板です行政書士の掲示板です行政書士の掲示板です行政書士の掲示板です行政書士の掲示板です行政書士の掲示板です行政書士の掲示板です行政書士の掲示板です行政書士の掲示板です'
        // ]);
        // $inst->save();
    }
}
