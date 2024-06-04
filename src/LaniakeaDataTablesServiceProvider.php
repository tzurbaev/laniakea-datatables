<?php

declare(strict_types=1);

namespace Laniakea\DataTables;

use Illuminate\Contracts\Config\Repository;
use Illuminate\Support\ServiceProvider;
use Laniakea\DataTables\Interfaces\DataTablesManagerInterface;

class LaniakeaDataTablesServiceProvider extends ServiceProvider
{
    /**
     * Boot services.
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/laniakea-datatables.php' => config_path('laniakea-datatables.php'),
        ]);
    }

    /**
     * Register services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laniakea-datatables.php', 'laniakea-datatables');

        $this->registerDataTables();
    }

    protected function registerDataTables(): void
    {
        $this->bindPackageAbstractions([
            DataTablesManagerInterface::class => DataTablesManager::class,
        ]);
    }

    protected function getConfig(): Repository
    {
        return $this->app->make('config');
    }

    protected function bindPackageAbstractions(array $bindings): void
    {
        foreach ($bindings as $abstract => $concrete) {
            $this->app->bind($abstract, function () use ($abstract, $concrete) {
                return $this->app->make(
                    $this->getConfig()->get('laniakea-datatables.bindings.'.$abstract, $concrete),
                );
            });
        }
    }
}
