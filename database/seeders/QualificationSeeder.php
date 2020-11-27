<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Qualification;

class QualificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $inst = new Qualification([
            'certificate' => '司法書士',
            'time' => '7月の第1日曜日',
            'passrate' => '約4%',
            'class' => '国家'
        ]);
        $inst->save();
        
        $inst = new Qualification([
            'certificate' => '行政書士',
            'time' => '11月の第2日曜日',
            'passrate' => '10%前後',
            'class' => '国家'
        ]);
        $inst->save();
        
        $inst = new Qualification([
            'certificate' => '社会保険労務士',
            'time' => '8月の第4日曜日',
            'passrate' => '約3～7％',
            'class' => '国家'
        ]);
        $inst->save();
        
        $inst = new Qualification([
            'certificate' => '宅地建物取引士',
            'time' => '10月の第3土曜日',
            'passrate' => '15％前後',
            'class' => '国家'
        ]);
        $inst->save();
        
        $inst = new Qualification([
            'certificate' => '海事代理士',
            'time' => '一次9月下旬・二次12月上旬',
            'passrate' => '一次50%前後・二次約60～90%',
            'class' => '国家'
        ]);
        $inst->save();
        
        $inst = new Qualification([
            'certificate' => '税理士',
            'time' => '8月上旬の3日間',
            'passrate' => '15%前後',
            'class' => '国家'
        ]);
        $inst->save();
        
        $inst = new Qualification([
            'certificate' => '弁理士',
            'time' => '一次5月中旬～下旬・二次6月下旬～7月上旬',
            'passrate' => '6～8%',
            'class' => '国家'
        ]);
        $inst->save();
        
        // $inst = new Qualification([
        //     'certificate' => '弁理士',
        //     'body' => '特許に関わる仕事',
        //     'time' => '選択6月中旬\r\n筆記9月中旬',
        //     'passrate' => '選択10%\r\n筆記5%前後',
        //     'class' => '国家'
        // ]);
        // $inst->save();
        
        // $inst = new Qualification([
        //     'certificate' => '通関士',
        //     'body' => '貿易に関わる仕事',
        //     'time' => '選択6月中旬\r\n筆記9月中旬',
        //     'passrate' => '選択10%\r\n筆記5%前後',
        //     'class' => '国家'
        // ]);
        // $inst->save();
        
        // $inst = new Qualification([
        //     'certificate' => 'なんとかなんとかなん',
        //     'body' => '特許に関わる仕事',
        //     'time' => '筆記9月中旬',
        //     'passrate' => '5%前後',
        //     'class' => '民間'
        // ]);
        // $inst->save();
        
        // $inst = new Qualification([
        //     'certificate' => '法学検定',
        //     'body' => '難易度が3つに分かれている',
        //     'time' => '6月中旬',
        //     'passrate' => '10%前後',
        //     'class' => '民間'
        // ]);
        // $inst->save();
        
    }
}
