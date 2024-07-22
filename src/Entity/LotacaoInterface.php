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
 * Definição de onde o usuário está lotado
 *
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
interface LotacaoInterface extends JsonSerializable
{
    public function getId(): ?int;
    public function setId(?int $id): static;

    public function setUsuario(?UsuarioInterface $usuario): static;
    public function getUsuario(): ?UsuarioInterface;

    public function setUnidade(?UnidadeInterface $unidade): static;
    public function getUnidade(): ?UnidadeInterface;

    public function setPerfil(?PerfilInterface $perfil): static;
    public function getPerfil(): ?PerfilInterface;
}
