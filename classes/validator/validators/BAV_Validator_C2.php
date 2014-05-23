<?php

/**
 * Implements C2
 *
 * Copyright (C) 2006  Markus Malkusch <markus@malkusch.de>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 */
class BAV_Validator_C2 extends BAV_Validator_Chain
{

    public function __construct(BAV_Bank $bank)
    {
        parent::__construct($bank);

        $this->validators[] = new BAV_Validator_22($bank);
        $this->validators[0]->setWeights(array(3, 1));

        $this->validators[] = new BAV_Validator_00($bank);
        $this->validators[1]->setWeights(array(2, 1));
    }
}
