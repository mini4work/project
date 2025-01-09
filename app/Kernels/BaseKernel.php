<?php

namespace App\Kernels;

use M4W\Abstract\AbstractKernel;
use M4W\Enums\ConsoleStyles;
use M4W\Facades\Console;

class BaseKernel extends AbstractKernel
{
    public function handle(...$args): void
    {
        Console::writeLine('Hello, World!');

        if (count($args[0]) > 1) {
            $argsList = implode(', ', array_splice($args[0], 1));
            Console::writeLine([
                ['Your arguments for command: ', ConsoleStyles::TextDefault],
                [$argsList, ConsoleStyles::TextBlue]
            ]);
        }
    }

    public function serviceProviders(): array
    {
        return [];
    }
}