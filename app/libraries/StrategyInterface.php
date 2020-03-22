<?php

namespace App\Libraries;

interface StrategyInterface
{
    /**
     * doPrint function declaration
     *
     * @return string
     */
    public function getResult($param) : string;
}