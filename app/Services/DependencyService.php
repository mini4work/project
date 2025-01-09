<?php

namespace App\Services;

class DependencyService
{
    public function getText(): string
    {
        return "This message from DI with Container";
    }
}