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

interface ConfiguracaoImpressaoInterface extends JsonSerializable
{
    public function getCabecalho(): ?string;
    public function setCabecalho(?string $cabecalho): static;

    public function getRodape(): ?string;
    public function setRodape(?string $rodape): static;

    public function getExibirNomeServico(): ?bool;
    public function setExibirNomeServico(?bool $exibirNomeServico): static;

    public function getExibirNomeUnidade(): ?bool;
    public function setExibirNomeUnidade(?bool $exibirNomeUnidade): static;

    public function getExibirMensagemServico(): ?bool;
    public function setExibirMensagemServico(?bool $exibirMensagemServico): static;

    public function getExibirData(): ?bool;
    public function setExibirData(?bool $exibirData): static;

    public function getExibirPrioridade(): ?bool;
    public function setExibirPrioridade(?bool $exibirPrioridade): static;
}
