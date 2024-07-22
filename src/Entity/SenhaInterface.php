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
use Stringable;

/**
 * Classe Senha
 * Responsavel pelas informacoes do Senha.
 *
 * @author Rogério Lino <rogeriolino@gmail.com>
 */
interface SenhaInterface extends JsonSerializable, Stringable
{
    public const LENGTH = 3;

    public function getSigla(): ?string;
    public function setSigla(?string $sigla): static;

    public function getNumero(): ?int;
    public function setNumero(?int $numero): static;

    /**
     * Retorna o numero da senha preenchendo com zero (esquerda).
     */
    public function getNumeroZeros(): string;
}
