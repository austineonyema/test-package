<?php

namespace Tests;

// use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Austineonyema\TestPackage\Facades\Greeting;
use Austineonyema\TestPackage\Facades\Report;
use Orchestra\Testbench\TestCase as BaseTestCase;
use Austineonyema\TestPackage\Providers\PackageServiceProvider;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            PackageServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Greeting' => Greeting::class,
            'Report' => Report::class,
        ];
    }
}
