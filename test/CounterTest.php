<?php

use App\Counter;
use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase
{
    public function valuesProvider()
    {
        return [
            [0, 1],
            [1, 2],
            [2, 'Linio'],
            [3, 4],
            [4, 'IT'],
            [5, 'Linio'],
            [6, 7],
            [7, 8],
            [8, 'Linio'],
            [9, 'IT'],
            [10, 11],
            [11, 'Linio'],
            [12, 13],
            [13, 14],
            [14, 'Linianos'],
            [29, 'Linianos'],
        ];
    }

    /**
     * @dataProvider valuesProvider
     * @test
     */
    public function can_counter_return_correct_values($index, $result)
    {
        $counter = new Counter();
        $this->assertEquals($result, $counter->getArrayList()[$index]);
    }
}