<?php

namespace App\Libraries;

use App\Libraries\StrategyInterface;

class LinianosStrategy implements StrategyInterface
{
    /**
     * getResult implementation
     *
     * @return string
     */
    public function getResult($param = null) : string
    {
        return 'Linianos';
    }
}