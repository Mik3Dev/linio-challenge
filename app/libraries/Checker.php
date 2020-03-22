<?php

namespace App\Libraries;

use App\Libraries\ItStrategy;
use App\Libraries\LinioStrategy;
use App\Libraries\DefaultStrategy;
use App\Libraries\LinianosStrategy;
use App\Libraries\StrategyInterface;

class Checker
{
    protected $strategy;

    public function getResult($number)
    {
        if (($number % 3 == 0) && ($number % 5 == 0))
        {
            return $this->setStrategy(new LinianosStrategy(), $number);
        }

        if ($number % 3 == 0)
        {
            return $this->setStrategy(new LinioStrategy(), $number);
        }

        if ($number % 5 == 0)
        {
            return $this->setStrategy(new ItStrategy(), $number);
        }

        return $this->setStrategy(new DefaultStrategy(), $number);
    }

    /**
     * set strategy function
     *
     * @param StrategyInterface $strategy
     * @param [type] $number
     * @return string
     */
    public function setStrategy(StrategyInterface $strategy, $number) : string
    {
        $this->strategy = $strategy;
        return $this->strategy->getResult($number);
    }
}