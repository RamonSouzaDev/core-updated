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
use Novosga\Entity\UsuarioInterface;
use Novosga\Entity\LotacaoInterface;
use Novosga\Entity\UnidadeInterface;

/**
 * LotacaoRepositoryInterface
 *
 * @extends ObjectRepository<LotacaoInterface>
 *
 * @author Rogério Lino <rogeriolino@gmail.com>
 */
interface LotacaoRepositoryInterface extends ObjectRepository, BaseRepository
{
    /**
     * Retorna as lotações do usuário
     * @return LotacaoInterface[]
     */
    public function getLotacoes(UsuarioInterface $usuario): array;

    /**
     * Retorna as lotações do usuário
     * @return LotacaoInterface[]
     */
    public function getLotacoesUnidade(UnidadeInterface $unidade): array;

    /**
     * Retorna a lotação do usuário na unidade
     */
    public function getLotacao(UsuarioInterface $usuario, UnidadeInterface $unidade): ?LotacaoInterface;
}
