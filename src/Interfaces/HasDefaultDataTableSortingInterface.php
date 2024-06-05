<?php

declare(strict_types=1);

namespace Laniakea\DataTables\Interfaces;

interface HasDefaultDataTableSortingInterface
{
    /**
     * Get the default datatable sorting column.
     *
     * @return string
     */
    public function getDefaultDataTableSortingColumn(): string;

    /**
     * Get the default datatable sorting direction.
     *
     * @return string
     */
    public function getDefaultDataTableSortingDirection(): string;
}
