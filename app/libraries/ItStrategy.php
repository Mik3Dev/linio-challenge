<?php

namespace App\Libraries;

class ItStrategy implements StrategyInterface
{
    public function getResult() : string
    {
        return 'IT';
    }
}