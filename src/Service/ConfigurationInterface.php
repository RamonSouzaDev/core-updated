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

/**
 * ConfigurationInterface
 *
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
interface ConfigurationInterface
{
    public function get(string $key): mixed;
}
