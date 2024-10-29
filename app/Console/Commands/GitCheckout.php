<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GitCheckout extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'app:git-checkout';


    protected $signature = 'git:checkout {branch}';
    protected $description = 'Checkout to the specified branch';


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
        $branch = $this->argument('branch');
        $output = shell_exec("git checkout {$branch} 2>&1");
        $this->info($output);
    }
}
