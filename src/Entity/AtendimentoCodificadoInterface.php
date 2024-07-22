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

/**
 * AtendimentoCodificadoInterface
 *
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
interface AtendimentoCodificadoInterface
{
    public function getAtendimento(): ?AtendimentoInterface;
    public function setAtendimento(?AtendimentoInterface $atendimento): static;

    public function getServico(): ?ServicoInterface;
    public function setServico(?ServicoInterface $servico): static;

    public function getPeso(): ?int;
    public function setPeso(?int $peso): static;
}
