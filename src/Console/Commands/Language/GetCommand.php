<?php

namespace Silenzion\Prometheus\Console\Commands\Language;

use Illuminate\Console\Command;
use Silenzion\Prometheus\Services\LanguageService;

class GetCommand extends Command
{
    protected $signature = 'language:get';

    protected $description = 'Get data for all languages';

    public function handle(LanguageService $language): bool
    {
        $language->get();
        $this->info('Данные обо всех языках успешно получены');
        return true;
    }
}
