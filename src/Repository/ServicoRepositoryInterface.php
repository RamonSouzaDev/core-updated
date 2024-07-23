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

/**
 * ServicoRepositoryInterface
 *
 * @extends ObjectRepository<ServicoInterface>
 *
 * @author Rogério Lino <rogeriolino@gmail.com>
 */
interface ServicoRepositoryInterface extends ObjectRepository, BaseRepository
{
    /**
     * Retorna os subserviços ativos do serviço informado
     * @param ServicoInterface $servico
     * @return ServicoInterface[]
     */
    public function getSubservicos(ServicoInterface $servico): array;
}
