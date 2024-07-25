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

use PHPUnit\Framework\TestCase;

/**
 * BaseModuleTest
 *
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
class BaseModuleTest extends TestCase
{
    public function testKeyName(): void
    {
        $bundle = new DummyTestBundle();
        $this->assertSame('novosga.tests.module', $bundle->getKeyName());
    }

    public function testRoleName(): void
    {
        $bundle = new DummyTestBundle();
        $this->assertSame('ROLE_NOVOSGA_TESTS_MODULE', $bundle->getRoleName());
    }

    public function testDomainName(): void
    {
        $this->assertSame('DummyTestBundle', DummyTestBundle::getDomain());
    }
}
