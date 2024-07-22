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
  * Senha enviada ao painel
  *
  * @author Rogerio Lino <rogeriolino@gmail.com>
  */
interface PainelSenhaInterface extends JsonSerializable
{
    public function getId(): ?int;
    public function setId(?int $id): static;

    public function getServico(): ?ServicoInterface;
    public function setServico(?ServicoInterface $servico): static;

    public function getUnidade(): ?UnidadeInterface;
    public function setUnidade(?UnidadeInterface $unidade): static;

    public function getNumeroSenha(): ?int;
    public function setNumeroSenha(?int $numeroSenha): static;

    public function getSiglaSenha(): ?string;
    public function setSiglaSenha(?string $siglaSenha): static;

    public function getMensagem(): ?string;
    public function setMensagem(?string $mensagem): static;

    public function getLocal(): ?string;
    public function setLocal(?string $local): static;

    public function getNumeroLocal(): ?int;
    public function setNumeroLocal(?int $numeroLocal): static;

    public function getPeso(): ?int;
    public function setPeso(?int $peso): static;

    public function getPrioridade(): ?string;
    public function setPrioridade(?string $prioridade): static;

    public function getNomeCliente(): ?string;
    public function setNomeCliente(?string $nomeCliente): static;

    public function getDocumentoCliente(): ?string;
    public function setDocumentoCliente(?string $documentoCliente): static;
}
