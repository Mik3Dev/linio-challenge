<?php

use PHPUnit\Framework\TestCase;
use App\Libraries\DefaultStrategy;

class DefaultStrategyTest extends TestCase
{

    public function valuesProvider()
    {
        return [
            [1, 1],
            [2, 2],
            [4, 4],
            [7, 7],
            [8, 8]
        ];
    }

    /**
     * @test
     * @dataProvider valuesProvider
     */
    public function can_default_strategy_class_return_default_value($a, $expected)
    {
        $defaultStrategy = new DefaultStrategy($a);
        $this->assertEquals($expected, $defaultStrategy->getResult($a));
    }
}