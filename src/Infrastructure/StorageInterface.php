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

namespace Novosga\Infrastructure;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Novosga\Entity\AgendamentoInterface;
use Novosga\Entity\AtendimentoCodificadoInterface;
use Novosga\Entity\AtendimentoInterface;
use Novosga\Entity\UnidadeInterface;

/**
 * StorageInterface
 *
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
interface StorageInterface
{
    public function getManager(): EntityManagerInterface;

    public function getRepository(string $className): EntityRepository;

    /** Gera uma nova senha de atendimento */
    public function distribui(AtendimentoInterface $atendimento, AgendamentoInterface $agendamento = null): void;

    public function chamar(AtendimentoInterface $atendimento): void;

    /** @param AtendimentoCodificadoInterface[] $codificados */
    public function encerrar(AtendimentoInterface $atendimento, array $codificados, AtendimentoInterface $novoAtendimento = null): void;

    /**
     * Move os dados de atendimento para o histórico
     * @param array<string,mixed> $ctx
     */
    public function acumularAtendimentos(?UnidadeInterface $unidade, array $ctx = []): void;

    /**
     * Apaga todos os dados de atendimentos
     * @param array<string,mixed> $ctx
     */
    public function apagarDadosAtendimento(?UnidadeInterface $unidade, array $ctx = []): void;
}
