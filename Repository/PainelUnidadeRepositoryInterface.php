<?php

/*
 * This file is part of the Novo SGA project.
 *
 * (c) Rogerio Lino <rogeriolino@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Novosga\Repository;

use Novosga\Entity\PainelUnidade;
use Novosga\Entity\Unidade;

/**
 * PainelUnidadeRepositoryInterface
 *
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
interface PainelUnidadeRepositoryInterface
{
    /**
     * @param Unidade $unidade
     * @return PainelUnidade|null
     */
    public function findByUnidade(Unidade $unidade);
}