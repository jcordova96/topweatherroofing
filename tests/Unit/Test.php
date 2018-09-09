<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Test extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {

        $a = 5;
        $b = 6;
        $c = $a + $b;

        $this->assertEquals(11, $c, 'a + b = c');



        $this->assertTrue(true);
    }
}
