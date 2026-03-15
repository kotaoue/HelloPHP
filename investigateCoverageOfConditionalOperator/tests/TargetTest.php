<?php

use PHPUnit\Framework\TestCase;

class TargetTest extends TestCase
{
    public function testReturnExcludeZero(): void
    {
        $this->assertEquals(1, Target::returnExcludeZero(1, 0));
        $this->assertEquals(2, Target::returnExcludeZero(0, 2));
        // $this->assertEquals(9999, Target::returnExcludeZero(0, 0));
    }
}
