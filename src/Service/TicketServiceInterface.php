<?php

declare(strict_types=1);

namespace Novosga\Service;

use Novosga\Entity\AtendimentoInterface;

interface TicketServiceInterface
{
    /**
     * Imprime a senha informada pelo atendimento.
     */
    public function printTicket(AtendimentoInterface $atendimento): string;
}
