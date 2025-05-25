<?php
declare(strict_types=1);

namespace Austineonyema\TestPackage\Providers;

use Austineonyema\TestPackage\Services\GreetingService;
use Austineonyema\TestPackage\Services\ReportService;
use Illuminate\Support\ServiceProvider;
use Austineonyema\TestPackage\Console\Commands\TestCommand;

final class PackageServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->singleton(GreetingService::class, fn() => new GreetingService());
        $this->app->bind(ReportService::class, fn() => new ReportService());
    }
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

