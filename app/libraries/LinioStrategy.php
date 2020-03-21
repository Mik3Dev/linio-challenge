<?php

namespace App\Libraries;

use App\Libraries\StrategyInterface;

class LinioStrategy implements StrategyInterface
{
    /**
     * getResult implementation
     *
     * @return string
     */
    public function getResult() : string
    {
        return 'Linio';
    }
}