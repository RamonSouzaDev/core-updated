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

use Novosga\Entity\UsuarioInterface;
use Novosga\Entity\UnidadeInterface;
use Novosga\Entity\ServicoInterface;
use Novosga\Entity\ServicoUsuarioInterface;
use Doctrine\Persistence\ObjectRepository;

/**
 * ServicoUsuarioRepositoryInterface
 *
 * @extends ObjectRepository<ServicoUsuarioInterface>
 *
 * @author Rogério Lino <rogeriolino@gmail.com>
 */
interface ServicoUsuarioRepositoryInterface extends ObjectRepository, BaseRepository
{
    /**
     * Retorna todos os serviços do usuario
     * @return ServicoUsuarioInterface[]
     */
    public function getAll(UsuarioInterface|int $usuario, UnidadeInterface|int $unidade): array;

    /**
     * Retorna o relacionamento entre o serviço e a usuario.
     */
    public function get(
        UsuarioInterface|int $usuario,
        UnidadeInterface|int $unidade,
        ServicoInterface|int $servico,
    ): ?ServicoUsuarioInterface;
}
