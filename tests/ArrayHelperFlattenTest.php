<?php

namespace dcwq\Test;

use dcwq\ArrayHelper;

class ArrayHelperFlattenTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_flattens_an_array()
    {
        $this->assertEquals(
            [1, 2, 3, 6, 7, 4],
            ArrayHelper::flatten([[1, 2, [3, 6, 7]], 4])
        );
    }

    /**
     * @test
     */
    public function it_flattens_an_array_recursively_to_depth()
    {
        $this->assertEquals(
            [1, 2, [3], 4, 5],
            ArrayHelper::flatten([1, [2, [3], 4], 5], 1)
        );
    }

    /**
     * @test
     * @expectedException Exception
     */
    public function it_throw_exception_if_not_integer_elements()
    {
        ArrayHelper::flatten(['one', [2, [3], 4], 5]);
    }
}
