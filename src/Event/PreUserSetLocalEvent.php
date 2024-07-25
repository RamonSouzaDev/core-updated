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

use Novosga\Entity\LocalInterface;
use Novosga\Entity\UnidadeInterface;
use Novosga\Entity\UsuarioInterface;

/**
 * PreUserSetLocalEvent
 *
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
final readonly class PreUserSetLocalEvent
{
    public function __construct(
        public UnidadeInterface $unidade,
        public UsuarioInterface $usuario,
        public LocalInterface $local,
        public string|int $numero,
        public string $tipo,
    ) {
    }
}
