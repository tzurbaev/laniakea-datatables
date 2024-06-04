<?php

declare(strict_types=1);

namespace Laniakea\Tests\Workbench\DataTables;

use Laniakea\DataTables\Interfaces\HasDataTableDefaultSortingInterface;

class ArticlesDataTableWithDataTableDefaultSorting extends ArticlesDataTable implements HasDataTableDefaultSortingInterface
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
