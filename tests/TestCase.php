<?php

declare(strict_types=1);

namespace Laniakea\Tests;

use Laniakea\DataTables\LaniakeaDataTablesServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            LaniakeaDataTablesServiceProvider::class,
        ];
    }
}
