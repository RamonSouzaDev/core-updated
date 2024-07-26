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

use Novosga\Entity\AtendimentoInterface;
use Novosga\Entity\PrioridadeInterface;
use Novosga\Entity\ServicoInterface;
use Novosga\Entity\UsuarioInterface;

/**
 * TicketTransferedEvent
 *
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
final readonly class TicketTransferedEvent
{
    public function __construct(
        public AtendimentoInterface $atendimento,
        public UsuarioInterface $usuario,
        public ServicoInterface $servicoAnterior,
        public PrioridadeInterface $prioridadeAnterior,
    ) {
    }
}
