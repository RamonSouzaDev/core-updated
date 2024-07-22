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
 * Classe Perfil
 * O perfil define permissões de acesso a módulos do sistema.
 *
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
interface PerfilInterface extends JsonSerializable
{
    public function getId(): ?int;
    public function setId(?int $id): static;

    public function setNome(?string $nome): static;
    public function getNome(): ?string;

    public function getDescricao(): ?string;
    public function setDescricao(?string $descricao): static;

    /** @return string[] */
    public function getModulos(): array;
    /** @param string[] $modulos */
    public function setModulos(array $modulos): static;
}
