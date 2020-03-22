<?php

use App\Libraries\Checker;
use App\Libraries\ItStrategy;
use PHPUnit\Framework\TestCase;
use App\Libraries\LinioStrategy;
use App\Libraries\DefaultStrategy;
use App\Libraries\LinianosStrategy;

class CheckerTest extends TestCase
{
    protected $checker;

    public function setUp() : void
    {
        $this->checker = new Checker();
    }

    public function valuesProvider()
    {
        return [
            [1, 1],
            [2, 2],
            [3, 'Linio'],
            [5, 'IT'],
            [6, 'Linio'],
            [9, 'Linio'],
            [10, 'IT'],
            [15, 'Linianos'],
            [16, 16],
            [30, 'Linianos']
        ];
    }

    /**
     * @dataProvider valuesProvider
     * @test
     */
    public function can_the_checker_class_return_right_value($number, $expected)
    {
        $this->assertEquals($expected, $this->checker->getResult($number));
    }

    /** @test */
    public function set_liniano_strategy_as_a_strategy_and_return_linianos()
    {
        $result = $this->checker->setStrategy(new LinianosStrategy(), 1);
        $this->assertEquals('Linianos', $result);
    }

    /** @test */
    public function set_linio_strategy_as_a_strategy_and_return_linio()
    {
        $result = $this->checker->setStrategy(new LinioStrategy(), 1);
        $this->assertEquals('Linio', $result);
    }

    /** @test */
    public function set_it_strategy_as_a_strategy_and_return_it()
    {
        $result = $this->checker->setStrategy(new ItStrategy(), 1);
        $this->assertEquals('IT', $result);
    }

    /** @test */
    public function set_default_strategy_as_a_strategy_and_return_a_number()
    {
        $result = $this->checker->setStrategy(new DefaultStrategy(), 1);
        $this->assertEquals(1, $result);

        $result = $this->checker->setStrategy(new DefaultStrategy(), 100);
        $this->assertEquals(100, $result);
    }
}