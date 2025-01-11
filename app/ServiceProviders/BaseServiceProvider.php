<?php

namespace App\ServiceProviders;

use App\Services\BaseService;
use M4W\Core\Providers\AbstractServiceProvider;

class BaseServiceProvider extends AbstractServiceProvider
{

    public function register(): void
    {
        $this->app->singleton(BaseService::class);
    }
}