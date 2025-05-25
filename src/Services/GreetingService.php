<?php
namespace Austineonyema\TestPackage\Services;

class GreetingService
{
    public $name;

    public function __construct(string $name = 'Austine')
    {
        $this->name = $name;
    }

    /**
     * Generates a greeting message.
     *
     * @return string
     */

    public function greeting()
    {
        return "Hello, $this->name";
    }
}
