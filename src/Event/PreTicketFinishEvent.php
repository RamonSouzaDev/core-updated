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

use Novosga\Entity\AtendimentoCodificadoInterface;
use Novosga\Entity\AtendimentoInterface;
use Novosga\Entity\ServicoInterface;
use Novosga\Entity\UsuarioInterface;

/**
 * PreTicketFinishEvent
 *
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
final readonly class PreTicketFinishEvent
{
    /** @param AtendimentoCodificadoInterface[] $servicosExecutados */
    public function __construct(
        public AtendimentoInterface $atendimento,
        public UsuarioInterface $usuario,
        public array $servicosExecutados,
        public ServicoInterface|int|null $servicoRedirecionado,
    ) {
    }
}
