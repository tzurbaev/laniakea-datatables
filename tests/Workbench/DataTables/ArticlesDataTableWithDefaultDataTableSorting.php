<?php

declare(strict_types=1);

namespace Laniakea\Tests\Workbench\DataTables;

use Laniakea\DataTables\Interfaces\HasDefaultDataTableSortingInterface;

class ArticlesDataTableWithDefaultDataTableSorting extends ArticlesDataTable implements HasDefaultDataTableSortingInterface
{
    public function getDefaultDataTableSortingColumn(): string
    {
        return 'created_at';
    }

    public function getDefaultDataTableSortingDirection(): string
    {
        return 'desc';
    }
}
