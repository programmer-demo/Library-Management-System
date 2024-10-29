<?php

namespace App\Console;

use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        \App\Console\Commands\pull_origin_main::class, // Register your command here
        \App\Console\Commands\push_origin_main::class,
        \App\Console\Commands\GitCheckout::class,
    ];

    protected function commands()
    {
        $this->load(__DIR__.'/Commands');
    }
}
