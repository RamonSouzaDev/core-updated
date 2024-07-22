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

use DateTime;
use JsonSerializable;

/**
 * AgendamentoInterface.
 *
 * @author rogerio
 */
interface AgendamentoInterface extends JsonSerializable
{
    public const SITUACAO_AGENDADO = 'agendado';
    public const SITUACAO_CONFIRMADO = 'confirmado';
    public const SITUACAO_NAO_COMPARECEU = 'nao_compareceu';

    public function getId(): ?int;

    public function setId(?int $id): static;

    public function getData(): ?DateTime;
    public function setData(?DateTime $data): static;

    public function getHora(): ?DateTime;
    public function setHora(?DateTime $hora): static;

    public function getSituacao(): ?string;
    public function setSituacao(?string $situacao): static;

    public function getCliente(): ?ClienteInterface;
    public function setCliente(?ClienteInterface $cliente): static;

    public function getUnidade(): ?UnidadeInterface;
    public function setUnidade(?UnidadeInterface $unidade): static;

    public function getServico(): ?ServicoInterface;
    public function setServico(?ServicoInterface $servico): static;

    public function getDataConfirmacao(): ?DateTime;
    public function setDataConfirmacao(?DateTime $dataConfirmacao): static;

    public function getOid(): ?string;
    public function setOid(?string $oid): static;
}
