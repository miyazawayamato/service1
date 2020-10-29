<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;//追加

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::factory(20)->create();
    }
}
