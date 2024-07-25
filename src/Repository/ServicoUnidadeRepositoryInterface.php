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
use Novosga\Entity\ServicoInterface;
use Novosga\Entity\ServicoUnidadeInterface;
use Novosga\Entity\UnidadeInterface;

/**
 * ServicoUnidadeRepositoryInterface
 *
 * @extends ObjectRepository<ServicoUnidadeInterface>
 *
 * @author Rogério Lino <rogeriolino@gmail.com>
 */
interface ServicoUnidadeRepositoryInterface extends ObjectRepository, BaseRepository
{
    /**
     * Retorna todos os serviços da unidade
     * @return ServicoUnidadeInterface[]
     */
    public function getAll(UnidadeInterface|int $unidade): array;

    /**
     * Retorna o relacionamento entre o serviço e a unidade.
     */
    public function get(UnidadeInterface|int $unidade, ServicoInterface|int $servico): ?ServicoUnidadeInterface;
}
