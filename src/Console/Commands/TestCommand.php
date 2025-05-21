<?php
namespace Austineonyema\TestPackage\Console\Commands;


use Illuminate\Console\Command;
use Illuminate\Support\Carbon;


final class TestCommand extends Command
{

    protected $signature = 'test:command {name}';
    protected $description = 'A test command to simply return dates';

    public function handle(): int
    {
        // Get the current date and time
        $now = Carbon::now();

        // Output the date and time to the console
        $this->info("Hello, {$this->argument('name')}! Current date and time is: {$now}");

        return 0; // Return 0 for successful execution
    }
}
