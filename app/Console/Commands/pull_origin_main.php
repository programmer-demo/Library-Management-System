<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class pull_origin_main extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'app:pull_origin_main';

    protected $signature = 'pull:main';
    protected $description = 'Pull the latest changes from the main branch';

    /**
     * The console command description.
     *
     * @var string
     */
    // protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $output = shell_exec('git pull origin main 2>&1');
        $this->info($output);
    }
}
