<?php

namespace SingleStore\Laravel;

use Illuminate\Support\ServiceProvider;
use SingleStore\Laravel\Connect\Connector;
use SingleStore\Laravel\Connect\SingleStoreConnection;

class SingleStoreProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register(): void
    {
        SingleStoreConnection::resolverFor('singlestore', function ($connection, $database, $prefix, $config) {
            return new SingleStoreConnection($connection, $database, $prefix, $config);
        });
    }

    public function boot(): void
    {
        $this->app->bind('db.connector.singlestore', Connector::class);
    }
}
