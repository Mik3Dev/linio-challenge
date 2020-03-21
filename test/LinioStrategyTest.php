<?php

use PHPUnit\Framework\TestCase;
use App\Libraries\LinioStrategy;

class LinioStrategyTest extends TestCase
{
    /** @test */
    public function can_linio_strategy_class_return_linio_value()
    {
        $linioStrategy = new LinioStrategy();
        $this->assertEquals('Linio', $linioStrategy->getResult());
    }
}