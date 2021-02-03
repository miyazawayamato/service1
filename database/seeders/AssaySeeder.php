<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Qualification;

class AssaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //検定関係
        $inst = new Qualification([
            'certificate' => '漢字検定',
            'time' => '2月6月10月',
            'passrate' => '約4%',
            'class' => '漢検'
        ]);
        $inst->save();
        $inst = new Qualification([
            'certificate' => '英語検定',
            'time' => '2月6月10月',
            'passrate' => '約4%',
            'class' => '漢検'
        ]);
        $inst->save();
        $inst = new Qualification([
            'certificate' => '中国語検定',
            'time' => '2月6月10月',
            'passrate' => '約4%',
            'class' => '漢検'
        ]);
        $inst->save();
        $inst = new Qualification([
            'certificate' => '数学検定',
            'time' => '2月6月10月',
            'passrate' => '約4%',
            'class' => '漢検'
        ]);
        $inst->save();
        //toeic
        // $inst = new Qualification([
        //     'certificate' => 'TOEIC',
        //     'time' => '2月6月10月',
        //     'passrate' => '約4%',
        //     'class' => '漢検'
        // ]);
        // $inst->save();
    }
}
