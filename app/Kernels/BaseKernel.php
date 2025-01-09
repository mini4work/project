<?php

namespace App\Kernels;

use App\ServiceProviders\BaseServiceProvider;
use App\Services\BaseService;
use Exception;
use M4W\Abstract\AbstractKernel;
use M4W\Enums\ConsoleStyles;
use M4W\Facades\Console;

class BaseKernel extends AbstractKernel
{
    /**
     * @throws Exception
     */
    public function handle(...$args): void
    {
        /** @var BaseService $service */
        $service = app(BaseService::class); // Dependency Injection Container (BaseService is singleton)

        $service->echoTextLogo();

        Console::writeLine([
            ['This use DI: ', [ConsoleStyles::FormatBoldOn]],
            [$service->textFromDependency(), [ConsoleStyles::TextBlue]]
        ]);

        Console::writeLine();

        $service->echoArgsIfSetted($args);
    }

    public function serviceProviders(): array
    {
        return [
            BaseServiceProvider::class
        ];
    }
}