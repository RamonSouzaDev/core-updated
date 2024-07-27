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

namespace Novosga\Event;

use Doctrine\ORM\QueryBuilder;
use Novosga\Entity\UnidadeInterface;
use Novosga\Entity\UsuarioInterface;
use Symfony\Contracts\EventDispatcher\Event;

/**
 * QueueOrderingEvent
 *
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
final class QueueOrderingEvent extends Event
{
    public function __construct(
        public readonly UnidadeInterface $unidade,
        public readonly ?UsuarioInterface $usuario,
        public readonly QueryBuilder $queryBuilder,
    ) {
    }
}
