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
use Novosga\Entity\PerfilInterface;

/**
 * PerfilRepositoryInterface
 *
 * @extends ObjectRepository<PerfilInterface>
 *
 * @author Rogério Lino <rogeriolino@gmail.com>
 */
interface PerfilRepositoryInterface extends ObjectRepository, BaseRepository
{
    /**
     * Retorna todos os perfis ordenados pelo nível e pelo nome
     * @return PerfilInterface[]
     */
    public function findAll(): array;
}
