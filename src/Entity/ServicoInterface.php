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

use Doctrine\Common\Collections\Collection;
use JsonSerializable;

/**
 * Servico
 *
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
interface ServicoInterface extends JsonSerializable
{
    public function getId(): ?int;
    public function setId(?int $id): static;

    public function getNome(): ?string;
    public function setNome(?string $nome): static;

    public function getDescricao(): ?string;
    public function setDescricao(?string $descricao): static;

    public function getMestre(): ?ServicoInterface;
    public function setMestre(?ServicoInterface $servico): static;
    public function isMestre(): bool;

    public function isAtivo(): bool;
    public function setAtivo(bool $ativo): static;

    public function getPeso(): ?int;
    public function setPeso(?int $peso): static;

    /** @return Collection<int,ServicoInterface> */
    public function getSubServicos(): Collection;
    /** @param Collection<int,ServicoInterface> $subServicos */
    public function setSubServicos(Collection $subServicos): static;

    /** @return Collection<int,ServicoUnidadeInterface> */
    public function getServicosUnidade(): Collection;
    /** @param Collection<int,ServicoUnidadeInterface> $servicosUnidade */
    public function setServicosUnidade(Collection $servicosUnidade): static;
}
