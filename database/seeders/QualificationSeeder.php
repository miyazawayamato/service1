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
        // $inst = new Qualification([
        //     'certificate' => '司法書士'
        // ]);
        // $inst->save();
        
        // $inst = new Qualification([
        //     'certificate' => '行政書士'
        // ]);
        // $inst->save();
        
        // $inst = new Qualification([
        //     'certificate' => '税理士'
        // ]);
        // $inst->save();
        
        $inst = new Qualification([
            'certificate' => '司法試験',
            'body' => '弁護士、裁判官、検察官になるための試験',
            'time' => '選択6月中旬\r\n筆記9月中旬',
            'passrate' => '選択10%\r\n筆記5%前後',
            'class' => '国家'
        ]);
        $inst->save();
        
        $inst = new Qualification([
            'certificate' => '司法予備試験',
            'body' => '弁護士、裁判官、検察官になるための試験',
            'time' => '選択6月中旬\r\n筆記9月中旬',
            'passrate' => '選択10%\r\n筆記5%前後',
            'class' => '国家'
        ]);
        $inst->save();
        
        $inst = new Qualification([
            'certificate' => '宅地建物取引士',
            'body' => 'メジャーな資格。宅建と訳される事が多い',
            'time' => '10月第２週',
            'passrate' => '１０％前後',
            'class' => '国家'
        ]);
        $inst->save();
        
        $inst = new Qualification([
            'certificate' => '海上代理士',
            'body' => '海の行政書士バージョン海の行政書士バージョン海の行政書士バージョン海の行政書士バージョン海の行政書士バージョン海の行政書士バージョン海の行政書士バージョン海の行政書士バージョン海の行政書士バージョン海の行政書士バージョン海の行政書士バージョン海の行政書士バージョン海の行政書士バージョン海の行政書士バージョン',
            'time' => '10月第２週',
            'passrate' => '１０％前後',
            'class' => '国家'
        ]);
        $inst->save();
        
        $inst = new Qualification([
            'certificate' => '弁理士',
            'body' => '特許に関わる仕事',
            'time' => '選択6月中旬\r\n筆記9月中旬',
            'passrate' => '選択10%\r\n筆記5%前後',
            'class' => '国家'
        ]);
        $inst->save();
        
        $inst = new Qualification([
            'certificate' => '通関士',
            'body' => '貿易に関わる仕事',
            'time' => '選択6月中旬\r\n筆記9月中旬',
            'passrate' => '選択10%\r\n筆記5%前後',
            'class' => '国家'
        ]);
        $inst->save();
        
        $inst = new Qualification([
            'certificate' => 'なんとかなんとかなん',
            'body' => '特許に関わる仕事',
            'time' => '筆記9月中旬',
            'passrate' => '5%前後',
            'class' => '民間'
        ]);
        $inst->save();
        
        $inst = new Qualification([
            'certificate' => '法学検定',
            'body' => '難易度が3つに分かれている',
            'time' => '6月中旬',
            'passrate' => '10%前後',
            'class' => '民間'
        ]);
        $inst->save();
        
    }
}
