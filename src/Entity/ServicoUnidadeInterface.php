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
 * Servico Unidade
 * Configuração do serviço na unidade
 *
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
interface ServicoUnidadeInterface extends JsonSerializable
{
    /** O atendimento do serviço pode ser tanto normal quanto prioridade */
    public const ATENDIMENTO_TODOS      = 1;
    /** O atendimento do serviço só poder ser normal */
    public const ATENDIMENTO_NORMAL     = 2;
    /** O atendimento do serviço só poder ser prioridade */
    public const ATENDIMENTO_PRIORIDADE = 3;

    public function getServico(): ?ServicoInterface;
    public function setServico(?ServicoInterface $servico): static;

    public function getUnidade(): ?UnidadeInterface;
    public function setUnidade(?UnidadeInterface $unidade): static;

    public function getDepartamento(): ?DepartamentoInterface;
    public function setDepartamento(?DepartamentoInterface $departamento): static;

    public function setAtivo(bool $ativo): static;
    public function isAtivo(): bool;

    public function getPeso(): ?int;
    public function setPeso(?int $peso): static;

    public function getSigla(): string;
    public function setSigla(string $sigla): static;

    public function getTipo(): ?int;
    public function setTipo(?int $tipo): static;

    public function getIncremento(): ?int;
    public function setIncremento(?int $incremento): static;

    public function getNumeroInicial(): ?int;
    public function setNumeroInicial(?int $numeroInicial): static;

    public function getNumeroFinal(): ?int;
    public function setNumeroFinal(?int $numeroFinal): static;

    public function getMaximo(): ?int;
    public function setMaximo(?int $maximo): static;

    public function getMensagem(): ?string;
    public function setMensagem(?string $mensagem): static;
}
