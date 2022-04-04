<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class DemoAssertion extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
        $this->assertEquals(4, 2 + 2, "They are not the same");
    }
}
