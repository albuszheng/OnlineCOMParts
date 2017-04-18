<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/home');
        $response->assertStatus(200);
    }

    public function testBasicTest_1()
    {
        $this->get('/home')->assertSee('OperatingFrequency');
    }
}

//given (pre-given)
//when (action for test)
//then (assert)

