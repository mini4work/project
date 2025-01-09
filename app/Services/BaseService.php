<?php

namespace App\Services;

use M4W\Enums\ConsoleStyles;
use M4W\Facades\Console;

class BaseService
{
    public function __construct(protected DependencyService $dependency) {}

    public function echoTextLogo(): void
    {
        Console::writeLine([
            [' Mini ', [ConsoleStyles::BgBlue, ConsoleStyles::TextBlueLight, ConsoleStyles::FormatBoldOn]],
            [' 4 ', [ConsoleStyles::TextWhite, ConsoleStyles::BgGrayDark, ConsoleStyles::FormatBoldOn]],
            [' Work ', [ConsoleStyles::BgBlue, ConsoleStyles::TextDefault, ConsoleStyles::FormatBoldOn]],
        ]);
    }

    public function textFromDependency(): string
    {
        return $this->dependency->getText();
    }

    public function echoArgsIfSetted($args): void
    {
        if (count($args[0]) == 1) {
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
}