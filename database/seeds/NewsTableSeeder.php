<?php

namespace Silenzion\Prometheus\Database\Seeds;

use Illuminate\Database\Seeder;
use Silenzion\Prometheus\Models\News;

class NewsTableSeeder extends Seeder
{
    public function run(): void
    {
        factory(News::class, 30)->create();
    }
}
