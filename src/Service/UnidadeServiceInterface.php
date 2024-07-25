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

/**
 * UnidadeServiceInterface.
 *
 * @author Rogério Lino <rogeriolino@gmail.com>
 */
interface UnidadeServiceInterface
{
    public const ATTR_NAMESPACE = 'global';

    public function getById(int $id): ?UnidadeInterface;

    /**
     * Cria ou retorna um metadado da unidade caso o $value seja null (ou ocultado).
     * @return ?EntityMetadataInterface<UnidadeInterface>
     */
    public function meta(UnidadeInterface $unidade, string $name, mixed $value = null): ?EntityMetadataInterface;

    public function addServicoUnidade(
        ServicoInterface $servico,
        UnidadeInterface $unidade,
        string $sigla
    ): ServicoUnidadeInterface;
}
