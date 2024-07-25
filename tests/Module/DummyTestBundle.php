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

namespace Novosga\Tests\Module;

use Novosga\Module\BaseModule;

/**
 * BaseModuleTest
 *
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
class DummyTestBundle extends BaseModule
{
    public function getIconName(): string
    {
        return 'fa-dummy';
    }

    public function getDisplayName(): string
    {
        return 'Dummy Bundle';
    }

    public function getHomeRoute(): string
    {
        return 'dummy_bundle_index';
    }
}
