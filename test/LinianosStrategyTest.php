<?php

use PHPUnit\Framework\TestCase;
use App\Libraries\LinianosStrategy;

class LinianosStrategyTest extends TestCase
{
    /** @test */
    public function can_linianos_strategy_class_return_linianos_value()
    {
        $linianosStrategy = new LinianosStrategy();
        $this->assertEquals('Linianos', $linianosStrategy->getResult());
    }
}