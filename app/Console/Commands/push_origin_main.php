<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class push_origin_main extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'push:main';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Push the latest changes from the main branch';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $output = shell_exec('git pull origin main 2>&1');
        $this->info($output);
    }
}
