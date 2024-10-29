<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

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
        // Define a fixed commit message
        $commitMessage = 'update from server';

        // Define the commands to run
        $commands = [
            ['git', 'add', '--all'],
            ['git', 'commit', '-m', $commitMessage],
            ['git', 'push', 'origin', 'main'],
        ];

        // Execute each command
        foreach ($commands as $command) {
            $process = new Process($command);
            $process->setWorkingDirectory(base_path()); // Ensure it runs in the project root

            $process->run();

            // Check if the process was successful
            if (!$process->isSuccessful()) {
                $this->error("Error: " . $process->getErrorOutput());
                return; // Exit on error
            } else {
                // Use `getOutput()` which returns a string
                $output = $process->getOutput();
                if (is_array($output)) {
                    $output = implode("\n", $output); // Convert to string if somehow it's an array
                }
                $this->info($output);
            }
        }

        $this->info('Changes pushed to the main branch successfully.');
    }
}
