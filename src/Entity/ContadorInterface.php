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

namespace Novosga\Entity;

use JsonSerializable;

/**
 * Ticket counter.
 *
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
interface ContadorInterface extends JsonSerializable
{
    public function getUnidade(): ?UnidadeInterface;
    public function setUnidade(?UnidadeInterface $unidade): static;

    public function getServico(): ?ServicoInterface;
    public function setServico(?ServicoInterface $servico): static;

    public function getNumero(): ?int;
    public function setNumero(?int $numero): static;
}
