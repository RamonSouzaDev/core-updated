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

use Novosga\Entity\ClienteInterface;
use Novosga\Entity\EntityMetadataInterface;

interface ClienteServiceInterface
{
    public const ATTR_NAMESPACE = 'global';

    public function getById(int $id): ?ClienteInterface;

    public function build(): ClienteInterface;

    public function save(ClienteInterface $cliente): ClienteInterface;

    /**
     * Cria ou retorna um metadado do cliente caso o $value seja null (ou ocultado).
     * @return ?EntityMetadataInterface<ClienteInterface>
     */
    public function meta(ClienteInterface $cliente, string $name, mixed $value = null): ?EntityMetadataInterface;
}
