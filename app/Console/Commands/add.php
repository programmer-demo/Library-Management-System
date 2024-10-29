<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class add extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'git:add';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        // Run the Git commands using shell_exec
        $output = shell_exec("git add --all 2>&1");

        $this->info($output);
    }
}
