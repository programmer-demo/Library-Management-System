<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class commit extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'git:commit';

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
        // Define a fixed commit message
        $commitMessage = 'update from server';

        // Run the Git commands using shell_exec
        $output = shell_exec("git commit -m \"$commitMessage\" 2>&1");

        $this->info($output);
    }
}
