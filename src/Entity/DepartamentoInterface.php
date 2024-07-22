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
 * DepartamentoInterface
 *
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
interface DepartamentoInterface extends JsonSerializable
{
    public function getId(): ?int;
    public function setId(?int $id): static;

    public function setNome(?string $nome): static;
    public function getNome(): ?string;

    public function setDescricao(?string $descricao): static;
    public function getDescricao(): ?string;

    public function isAtivo(): bool;
    public function setAtivo(bool $ativo): static;
}
