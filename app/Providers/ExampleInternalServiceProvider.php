<?php

namespace App\Providers;

use App\Modules\ExampleInternalService\ExampleInternalServiceConnection;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use Illuminate\Support\ServiceProvider;

class ExampleInternalServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app
            ->when(ExampleInternalServiceConnection::class)
            ->needs(ClientInterface::class)
            ->give(function () {
                return new Client([
                    'base_uri' => config('external_service.base_url'),
                    'verify' => false,
                ]);
            });
    }

    public function boot()
    {
    }
}
