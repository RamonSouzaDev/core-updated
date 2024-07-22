<?php

declare(strict_types=1);

namespace Novosga\Repository;

use Doctrine\ORM\QueryBuilder;

interface BaseRepository
{
    public function createQueryBuilder(string $alias, string|null $indexBy = null): QueryBuilder;
}
