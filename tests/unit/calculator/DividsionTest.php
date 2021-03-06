<?php

use PHPUnit\Framework\TestCase;

class DivisionTest extends TestCase
{

    /** @test */
    public function divides_given_operands()
    {
        $division = new \App\Calculator\Division;
        $division->setOperands([100, 2]);

        $this->assertEquals(50, $division->calculate());
    }

    /** @test */
    public function no_operands_throws_exception_when_calculating()
    {
        $this->expectException(\App\Calculator\Exceptions\NoOperandsException::class);

        $division = new \App\Calculator\Division;

        $division->calculate();

    }

    /** @test */
    public function removes_division_by_zero_operands()
    {
        $division = new \App\Calculator\Division;
        $division->setOperands([10, 0, 0, 5]);

        $this->assertEquals(2, $division->calculate());

    }
}