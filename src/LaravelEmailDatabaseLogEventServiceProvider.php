<?php

namespace EquiPC\LaravelEmailDatabaseLog;

use EquiPC\LaravelEmailDatabaseLog\EmailLogger;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Mail\Events\MessageSent;

class LaravelEmailDatabaseLogEventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        MessageSent::class => [
            EmailLogger::class,
        ],
    ];
}
