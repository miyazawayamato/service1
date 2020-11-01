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
            'certificate' => '司法書士'
        ]);
        $inst->save();
        
        $inst = new Qualification([
            'certificate' => '行政書士'
        ]);
        $inst->save();
        
        $inst = new Qualification([
            'certificate' => '税理士'
        ]);
        $inst->save();
    }
}
