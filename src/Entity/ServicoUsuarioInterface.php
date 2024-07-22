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
 * Servico Usuario
 * Configuração do serviço que o usuário atende
 *
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
interface ServicoUsuarioInterface extends JsonSerializable
{
    public function getServico(): ?ServicoInterface;
    public function setServico(?ServicoInterface $servico): static;

    public function getUnidade(): ?UnidadeInterface;
    public function setUnidade(?UnidadeInterface $unidade): static;

    public function getUsuario(): ?UsuarioInterface;
    public function setUsuario(?UsuarioInterface $usuario): static;

    public function getPeso(): ?int;
    public function setPeso(?int $peso): static;
}
