<?php

namespace Silenzion\Prometheus\Console\Commands\Admin;

use Illuminate\Console\Command;
use Silenzion\Prometheus\Models\User;

class DeleteCommand extends Command
{
    protected $signature = 'admin:delete {login}';

    protected $description = 'Delete admin';

    public function handle(): bool
    {
        $login = $this->argument('login');

        /** @var User $admin */
        $admin = User::where('login', $login)->first();

        if (is_null($admin)) {
            $this->error('Администратора с таким логином не существует');
            return false;
        }

        $admin->delete();
        $this->info('Администратор успешно удален');

        return true;
    }
}
