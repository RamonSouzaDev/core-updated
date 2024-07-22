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

use Novosga\Entity\AtendimentoInterface;
use Novosga\Entity\ServicoInterface;
use Novosga\Entity\ServicoUsuarioInterface;
use Novosga\Entity\UnidadeInterface;
use Novosga\Entity\UsuarioInterface;

/**
 * FilaServiceInterface
 *
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
interface FilaServiceInterface
{
    public const TIPO_TODOS = 'todos';
    public const TIPO_NORMAL = 'normal';
    public const TIPO_PRIORIDADE = 'prioridade';
    public const TIPO_AGENDAMENTO = 'agendamento';
    public const TIPOS_ATENDIMENTO = [
        self::TIPO_TODOS,
        self::TIPO_NORMAL,
        self::TIPO_PRIORIDADE,
        self::TIPO_AGENDAMENTO,
    ];

    /**
     * Retorna a fila de atendimentos do usuario.
     * @param ServicoUsuarioInterface[] $servicosUsuario
     * @return AtendimentoInterface[]
     */
    public function getFilaAtendimento(
        UnidadeInterface $unidade,
        UsuarioInterface $usuario,
        array $servicosUsuario = [],
        string $tipoFila = self::TIPO_TODOS,
        int $maxResults = 0,
    ): array;

    /**
     * Retorna a fila de espera do serviço na unidade.
     * @return AtendimentoInterface[]
     */
    public function getFilaServico(UnidadeInterface $unidade, ServicoInterface $servico): array;

    /**
     * Retorna a fila de espera do serviço na unidade.
     * @return AtendimentoInterface[]
     */
    public function getFilaUnidade(UnidadeInterface $unidade): array;
}
