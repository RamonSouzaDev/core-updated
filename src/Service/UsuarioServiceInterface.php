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

namespace Novosga\Service;

use Novosga\Entity\EntityMetadataInterface;
use Novosga\Entity\ServicoInterface;
use Novosga\Entity\ServicoUsuarioInterface;
use Novosga\Entity\UnidadeInterface;
use Novosga\Entity\UsuarioInterface;

/**
 * UsuarioServiceInterface.
 *
 * @author Rogério Lino <rogeriolino@gmail.com>
 */
interface UsuarioServiceInterface
{
    public const ATTR_NAMESPACE             = 'global';
    public const ATTR_ATENDIMENTO_LOCAL     = 'atendimento.local';
    public const ATTR_ATENDIMENTO_NUM_LOCAL = 'atendimento.num_local';
    public const ATTR_ATENDIMENTO_TIPO      = 'atendimento.tipo';
    public const ATTR_SESSION_UNIDADE       = 'session.unidade';

    public function getById(int $id): ?UsuarioInterface;

    public function build(): UsuarioInterface;

    /**
     * Cria ou retorna um metadado do usuário caso o $value seja null (ou ocultado).
     * @return ?EntityMetadataInterface<UsuarioInterface>
     */
    public function meta(UsuarioInterface $usuario, string $name, mixed $value = null): ?EntityMetadataInterface;

    public function getServicoUsuario(
        UsuarioInterface $usuario,
        ServicoInterface $servico,
        UnidadeInterface $unidade
    ): ?ServicoUsuarioInterface;

    /**
     * Retorna a lista de serviços que o usuário atende na determinada unidade.
     * @return ServicoUsuarioInterface[]
     */
    public function getServicosUnidade(UsuarioInterface $usuario, UnidadeInterface $unidade): array;

    public function updateAtendente(
        UsuarioInterface $usuario,
        ?string $tipoAtendimento,
        ?int $local,
        ?int $numero,
    ): void;

    public function addServicoUsuario(
        UsuarioInterface $usuario,
        ServicoInterface $servico,
        UnidadeInterface $unidade
    ): ServicoUsuarioInterface;

    public function removeServicoUsuario(
        UsuarioInterface $usuario,
        ServicoInterface $servico,
        UnidadeInterface $unidade
    ): ?ServicoUsuarioInterface;

    public function updateServicoUsuario(
        UsuarioInterface $usuario,
        ServicoInterface $servico,
        UnidadeInterface $unidade,
        int $peso,
    ): ?ServicoUsuarioInterface;
}
