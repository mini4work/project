<?php

namespace App\Kernels;

use M4W\Abstract\AbstractKernel;
use M4W\Enums\ConsoleStyles;
use M4W\Facades\Console;

class BaseKernel extends AbstractKernel
{
    public function handle(...$args): void
    {
        Console::writeLine('Hello there!', ConsoleStyles::BgGreen);
        Console::writeLine('This message from a standard BaseKernel.', ConsoleStyles::BgMagenta);

        if (count($args[0]) == 1) {
            Console::writeLine('For next testing step, you can try run this command with params', ConsoleStyles::FormatUnderlineOn);

            Console::writeLine([
                ['Try, for example: '],
                ['php m4w hello', ConsoleStyles::TextGreen]
            ]);
            return;
        }


        $argsList = implode(', ', array_splice($args[0], 1));
        Console::writeLine([
            ['Your arguments for command: ', ConsoleStyles::TextDefault],
            [$argsList, ConsoleStyles::TextBlue]
        ]);
    }

    public
    function serviceProviders(): array
    {
        return [];
    }
}