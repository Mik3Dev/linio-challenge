<?php

use App\Libraries\ItStrategy;
use PHPUnit\Framework\TestCase;

class ItStrategyTest extends TestCase
{
    /** @test */
    public function can_linio_strategy_class_return_it_value()
    {
        $itStrategy = new ItStrategy();
        $this->assertEquals('IT', $itStrategy->getResult());
    }
}