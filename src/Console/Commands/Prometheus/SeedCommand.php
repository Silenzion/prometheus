<?php

namespace Silenzion\Prometheus\Console\Commands\Prometheus;

use Illuminate\Console\Command;
use Silenzion\Prometheus\Database\Seeds\CoreSeeder;

class SeedCommand extends Command
{
    protected $signature = 'core:seed';

    protected $description = 'Seed the core database with test records';

    public function handle(): bool
    {
        $this->call('db:seed', [
            '--class' => CoreSeeder::class,
        ]);

        $this->info('База данных была успешно заполнена тестовыми данными');
        return true;
    }
}
