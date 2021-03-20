<?php

namespace Silenzion\Prometheus\Console\Commands\Prometheus;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    protected $signature = 'prometheus:install';

    protected $description = 'Install Prometheus';

    public function handle(): bool
    {
        $this->call('storage:link');

        $this->info('Модуль Prometheus успешно установлен');
        return true;
    }
}
