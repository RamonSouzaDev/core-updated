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

use DateTimeInterface;
use JsonSerializable;

/**
 * ClienteInterface.
 *
 * @author rogerio
 */
interface ClienteInterface extends JsonSerializable
{
    public function getId(): ?int;
    public function setId(?int $id): static;

    public function getNome(): ?string;
    public function setNome(?string $nome): static;

    public function getDocumento(): ?string;
    public function setDocumento(?string $documento): static;

    public function getEmail(): ?string;
    public function setEmail(?string $email): static;

    public function getTelefone(): ?string;
    public function setTelefone(?string $telefone): static;

    public function getDataNascimento(): ?DateTimeInterface;
    public function setDataNascimento(?DateTimeInterface $dataNascimento): static;

    public function getGenero(): ?string;
    public function setGenero(?string $genero): static;

    public function getEndereco(): ?EnderecoInterface;
    public function setEndereco(?EnderecoInterface $endereco): static;

    public function getObservacao(): ?string;
    public function setObservacao(?string $observacao): static;
}
