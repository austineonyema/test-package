<?php


use Austineonyema\TestPackage\Facades\Report;
use Austineonyema\TestPackage\Services\GreetingService;

it('generates a report timestamp', function () {
    expect(Report::getFormatted())->toBe('Generated at: ' . now()->toDateTimeString());
});

it('generates a greeting with a custom name', function () {
    $greeting = new GreetingService('John');
    expect($greeting->greeting())->toBe('Hello, John');
});

it('tests the output of a console command', function () {
    $this->artisan('test:command maxwell')
        ->expectsOutput("Hello, maxwell! Current date and time is: " . now())
        ->assertExitCode(0);
});
