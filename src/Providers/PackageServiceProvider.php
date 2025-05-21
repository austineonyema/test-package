<?php
declare(strict_types=1);

namespace Austineonyema\TestPackage\Providers;

use Illuminate\Support\ServiceProvider;
use Austineonyema\TestPackage\Console\Commands\TestCommand;

final class PackageServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands(
                commands: [
                    TestCommand::class,
                ],
            );
        }
    }
}

