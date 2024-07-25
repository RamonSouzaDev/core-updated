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

use Novosga\Entity\EntityMetadataInterface;
use Doctrine\Persistence\ObjectRepository;

/**
 * EntityMetadataRepositoryInterface
 *
 * @template T of EntityMetadataInterface
 * @template E
 * @extends ObjectRepository<T>
 *
 * @author Rogério Lino <rogeriolino@gmail.com>
 */
interface EntityMetadataRepositoryInterface extends ObjectRepository, BaseRepository
{
    /**
     * @param E $entity
     * @return T[]
     */
    public function findByNamespace($entity, string $namespace): array;

    /**
     * @param E $entity
     * @return ?T
     */
    public function get($entity, string $namespace, string $name);

    /**
     * @param E $entity
     * @return T
     */
    public function set($entity, string $namespace, string $name, mixed $value = null);

    /** @param E $entity */
    public function remove($entity, string $namespace, string $name): void;
}
