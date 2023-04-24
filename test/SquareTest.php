<?php

namespace test\test;

use PHPUnit\Framework\TestCase;
use SOLID\LSP\Rectangle;
use SOLID\LSP\Square;

class SquareTest extends TestCase
{
    private Rectangle $square;
    protected function setUp()
    {
        $this->square = new Rectangle(5, 10);
    }

    public function test_the_area_is_valid()
    {
        $this->assertEquals(50, $this->square->calculateArea());
    }
}
