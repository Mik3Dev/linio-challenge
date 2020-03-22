<?php

use App\Checker;
use PHPUnit\Framework\TestCase;

class CheckerTest extends TestCase
{
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
        $checker = new Checker();
        $this->assertEquals($expected, $checker->getResult($number));
    }
}