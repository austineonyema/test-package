<?php
namespace Austineonyema\TestPackage\Services;
use Carbon\Carbon;


class ReportService
{
    protected string $generatedAt;

    public function __construct()
    {
        $this->generatedAt = Carbon::now()->toDateTimeString();
    }

    protected function formatTime(): string
    {
        return "Generated at: {$this->generatedAt}";
    }
    /**
     * Generates a report.
     *
     * @return string
     */
    public function getFormatted(): string
    {
        return $this->formatTime();
    }
}
