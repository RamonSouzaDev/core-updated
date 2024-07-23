<?php

declare(strict_types=1);

/*
 * This file is part of the Novo SGA project.
 *
 * (c) Rogerio Lino <rogeriolino@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Novosga\Repository;

use Doctrine\Persistence\ObjectRepository;
use Novosga\Entity\PrioridadeInterface;

/**
 * PrioridadeRepositoryInterface
 *
 * @extends ObjectRepository<PrioridadeInterface>
 *
 * @author Rogério Lino <rogeriolino@gmail.com>
 */
interface PrioridadeRepositoryInterface extends ObjectRepository, BaseRepository
{
    /** @return PrioridadeInterface[] */
    public function findAtivas(): array;
}
