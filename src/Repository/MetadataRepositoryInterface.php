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
use Novosga\Entity\MetadataInterface;

/**
 * MetadataRepositoryInterface
 *
 * @template T of MetadataInterface
 * @extends ObjectRepository<T>
 *
 * @author Rogério Lino <rogeriolino@gmail.com>
 */
interface MetadataRepositoryInterface extends ObjectRepository, BaseRepository
{
    /** @return ?T */
    public function get(string $namespace, string $name): ?MetadataInterface;

    /** @return T */
    public function set(string $namespace, string $name, mixed $value = null): MetadataInterface;
}
