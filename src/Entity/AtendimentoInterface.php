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

use DateInterval;
use DateTimeInterface;
use Doctrine\Common\Collections\Collection;
use JsonSerializable;

/**
 * AtendimentoInterface
 *
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
interface AtendimentoInterface extends JsonSerializable
{
    public function getId(): ?int;
    public function setId(?int $id): static;

    public function getPai(): ?AtendimentoInterface;
    public function setPai(?self $pai): static;

    /** @return Collection<int,AtendimentoCodificadoInterface> */
    public function getCodificados(): Collection;
    /** @param Collection<int,AtendimentoCodificadoInterface> $codificados */
    public function setCodificados(Collection $codificados): static;

    public function getUnidade(): ?UnidadeInterface;
    public function setUnidade(?UnidadeInterface $unidade): static;

    public function getServico(): ?ServicoInterface;
    public function setServico(?ServicoInterface $servico): static;

    public function getUsuario(): ?UsuarioInterface;
    public function setUsuario(?UsuarioInterface $usuario): static;

    public function setUsuarioTriagem(?UsuarioInterface $usuario): static;
    public function getUsuarioTriagem(): ?UsuarioInterface;

    public function getLocal(): ?LocalInterface;
    public function setLocal(?LocalInterface $local): static;

    public function getNumeroLocal(): ?int;
    public function setNumeroLocal(?int $numeroLocal): static;

    public function getDataAgendamento(): ?DateTimeInterface;
    public function setDataAgendamento(?DateTimeInterface $dataAgendamento): static;

    public function getDataChegada(): ?DateTimeInterface;
    public function setDataChegada(?DateTimeInterface $dataChegada): static;

    public function getDataChamada(): ?DateTimeInterface;
    public function setDataChamada(?DateTimeInterface $dataChamada): static;

    public function getDataInicio(): ?DateTimeInterface;
    public function setDataInicio(?DateTimeInterface $dataInicio): static;

    public function getDataFim(): ?DateTimeInterface;
    public function setDataFim(?DateTimeInterface $dataFim): static;

    public function getStatus(): ?string;
    public function setStatus(?string $status): static;

    public function getResolucao(): ?string;
    public function setResolucao(?string $resolucao): static;

    public function setTempoEspera(DateInterval $tempoEspera): static;
    public function getTempoEspera(): DateInterval;

    public function setTempoPermanencia(DateInterval $tempoPermanencia): static;
    public function getTempoPermanencia(): DateInterval;

    public function setTempoAtendimento(DateInterval $tempoAtendimento): static;
    public function getTempoAtendimento(): DateInterval;

    public function setTempoDeslocamento(DateInterval $tempoDeslocamento): static;
    public function getTempoDeslocamento(): DateInterval;

    public function getCliente(): ?ClienteInterface;
    public function setCliente(?ClienteInterface $cliente): static;

    public function getSenha(): SenhaInterface;

    public function getPrioridade(): ?PrioridadeInterface;
    public function setPrioridade(?PrioridadeInterface $prioridade): static;

    public function getObservacao(): ?string;
    public function setObservacao(?string $observacao): static;
}
