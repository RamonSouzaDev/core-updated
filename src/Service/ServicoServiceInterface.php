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

namespace Novosga\Service;

use Novosga\Entity\EntityMetadataInterface;
use Novosga\Entity\ServicoInterface;
use Novosga\Entity\ServicoUnidadeInterface;
use Novosga\Entity\UnidadeInterface;
use Novosga\Entity\UsuarioInterface;

/**
 * ServicoServiceInterface.
 *
 * @author Rogério Lino <rogeriolino@gmail.com>
 */
interface ServicoServiceInterface
{
    public const ATTR_NAMESPACE = 'global';

    public function getById(int $id): ?ServicoInterface;

    /**
     * Cria ou retorna um metadado do serviço caso o $value seja null (ou ocultado).
     * @return ?EntityMetadataInterface<ServicoInterface>
     */
    public function meta(ServicoInterface $servico, string $name, mixed $value = null): ?EntityMetadataInterface;

    /**
     * Retorna a lista de serviços ativos.
     * @param array<string,mixed> $where
     * @return ServicoUnidadeInterface[]
     */
    public function servicosUnidade(UnidadeInterface|int $unidade, array $where = []): array;

    /**
     * Retorna os servicos que o usuario nao atende na unidade atual.
     * @return ServicoUnidadeInterface[]
     */
    public function servicosIndisponiveis(UnidadeInterface|int $unidade, UsuarioInterface|int $usuario): array;

    /** Gera uma nova sigla baseada no número sequencial (ex: A, B, C, D, ...) */
    public function gerarSigla(int $sequencia): string;
}
