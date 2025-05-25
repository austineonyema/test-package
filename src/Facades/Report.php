<?php
namespace Austineonyema\TestPackage\Facades;
use Illuminate\Support\Facades\Facade;
use Austineonyema\TestPackage\Services\ReportService;

class Report extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return ReportService::class;
    }
}
