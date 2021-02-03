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
        //法律
        $inst = new Qualification([
            'certificate' => '司法書士',
            'time' => '7月の第1日曜日',
            'passrate' => '約4%',
            'class' => '法律'
        ]);
        $inst->save();

        $inst = new Qualification([
            'certificate' => '行政書士',
            'time' => '11月の第2日曜日',
            'passrate' => '10%前後',
            'class' => '法律'
        ]);
        $inst->save();

        $inst = new Qualification([
            'certificate' => '社会保険労務士',
            'time' => '8月の第4日曜日',
            'passrate' => '約3～7％',
            'class' => '法律'
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
            'class' => '法律'
        ]);
        $inst->save();

        $inst = new Qualification([
            'certificate' => '税理士',
            'time' => '8月上旬の3日間',
            'passrate' => '15%前後',
            'class' => '法律'
        ]);
        $inst->save();

        $inst = new Qualification([
            'certificate' => '弁理士',
            'time' => '短答5月・筆記6～7月・口述10月',
            'passrate' => '6～8%',
            'class' => '法律'
        ]);
        $inst->save();

        $inst = new Qualification([
            'certificate' => '司法試験',
            'time' => '5月',
            'passrate' => '25%前後',
            'class' => '法律'
        ]);
        $inst->save();

        $inst = new Qualification([
            'certificate' => '司法予備試験',
            'time' => '短答5月/筆記7月/口述10月',
            'passrate' => '4%前後',
            'class' => '法律'
        ]);
        $inst->save();

        $inst = new Qualification([
            'certificate' => '中小企業診断士',
            'time' => '一次8月/二次筆記10月・口述12月',
            'passrate' => '15～25％前後',
            'class' => '法律'
        ]);
        $inst->save();
        
        
        $inst = new Qualification([
            'certificate' => '土地家屋調査士',
            'time' => '筆記10月の第三日曜日・口述1月',
            'passrate' => '8％前後',
            'class' => '法律'
        ]);
        $inst->save();
        
        $inst = new Qualification([
            'certificate' => '不動産鑑定士',
            'time' => '短答5月/論文8月の3日間',
            'passrate' => '短答32％前後/論文14％前後',
            'class' => '法律'
        ]);
        $inst->save();
        
        //経理関係
        $inst = new Qualification([
            'certificate' => '公認会計士',
            'time' => '短答5月・12月/論文8月',
            'passrate' => '10%前後',
            'class' => '経理'
        ]);
        $inst->save();
        
        $inst = new Qualification([
            'certificate' => '日商簿記1級',
            'time' => '6月/11月',
            'passrate' => '9%前後',
            'class' => '経理'
            ]);
        $inst->save();
        
        $inst = new Qualification([
            'certificate' => '日商簿記2級',
            'time' => '2月/6月/11月',
            'passrate' => '約12%～28%',
            'class' => '経理'
        ]);
        $inst->save();
        
        $inst = new Qualification([
            'certificate' => '日商簿記3級',
            'time' => '2月/6月/11月',
            'passrate' => '50%前後',
            'class' => '経理'
        ]);
        $inst->save();
        
        $inst = new Qualification([
            'certificate' => '日商簿記初級(旧4級)',
            'time' => '随時',
            'passrate' => '55%前後',
            'class' => '経理'
        ]);
        $inst->save();
        
        //it関係
        $inst = new Qualification([
            'certificate' => 'itパスポート',
            'time' => '毎月',
            'passrate' => '50%前後',
            'class' => 'IT'
        ]);
        $inst->save();

        $inst = new Qualification([
            'certificate' => '基本情報技術者',
            'time' => '4月と10月の第3日曜日',
            'passrate' => '22%～30%',
            'class' => 'IT'
        ]);
        $inst->save();

        $inst = new Qualification([
            'certificate' => '応用情報技術者',
            'time' => '4月と10月の第3日曜日',
            'passrate' => '20%前後',
            'class' => 'IT'
        ]);
        $inst->save();

        $inst = new Qualification([
            'certificate' => '情報セキュリティマネジメント',
            'time' => '4月と10月の第3日曜日',
            'passrate' => '50%前後',
            'class' => 'IT'
        ]);
        $inst->save();

        $inst = new Qualification([
            'certificate' => '情報処理安全確保支援士',
            'time' => '4月と10月の第3日曜日',
            'passrate' => '18%前後',
            'class' => 'IT'
        ]);
        $inst->save();


        //FP 区分入れてない
        //AFPは研修なのでいれてない
        $inst = new Qualification([
            'certificate' => '1級FP',
            'time' => '1月5月9月',
            'passrate' => '10%前後',
            'class' => ''
        ]);
        $inst->save();

        $inst = new Qualification([
            'certificate' => '2級FP',
            'time' => '1月5月9月',
            'passrate' => '40%前後',
            'class' => ''
        ]);
        $inst->save();

        $inst = new Qualification([
            'certificate' => '3級FP',
            'time' => '1月5月9月',
            'passrate' => '70%前後',
            'class' => ''
        ]);
        $inst->save();

        $inst = new Qualification([
            'certificate' => 'CFP',
            'time' => '6月・11月',
            'passrate' => '各35％前後',
            'class' => ''
        ]);
        $inst->save();
    }
}
