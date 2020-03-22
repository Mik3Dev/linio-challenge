<?php

namespace App\Libraries;

use App\Libraries\StrategyInterface;

class DefaultStrategy implements StrategyInterface
{
    /**
     * getResult implementation
     *
     * @return string
     */
    public function getResult($param) : string
    {
        return $param;
    }
}