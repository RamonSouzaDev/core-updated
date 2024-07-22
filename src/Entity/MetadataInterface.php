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
 * MetadataInterface
 *
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
interface MetadataInterface extends JsonSerializable
{
    public function getNamespace(): ?string;
    public function setNamespace(?string $namespace): static;

    public function getName(): ?string;
    public function setName(?string $name): static;

    public function getValue(): mixed;
    public function setValue(mixed $value): static;
}
