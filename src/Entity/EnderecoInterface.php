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
 * EnderecoInterface
 *
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
interface EnderecoInterface extends JsonSerializable
{
    public function getNumero(): ?string;
    public function setNumero(?string $numero): static;

    public function getComplemento(): ?string;
    public function setComplemento(?string $complemento): static;

    public function getLogradouro(): ?string;
    public function setLogradouro(?string $logradouro): static;

    public function getCep(): ?string;
    public function setCep(?string $cep): static;

    public function getEstado(): ?string;
    public function setEstado(?string $estado): static;

    public function getCidade(): ?string;
    public function setCidade(?string $cidade): static;

    public function getPais(): ?string;
    public function setPais(?string $pais): static;
}
