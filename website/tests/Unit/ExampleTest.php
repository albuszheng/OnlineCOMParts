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
    public function test_home_loading()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_home_content()
    {
        $this->get('/')->assertSee('CPU');
    }

    public function test_product_cpu_loading()
    {
        $response = $this->get('/products/l/cpu');
        $response->assertStatus(200);
    }

    public function test_product_cpu_content()
    {
        $this->get('/products/l/cpu')->assertSee('AMD');
    }

    public function test_product_cpu_click()
    {
        $this->get('/products/l/cpu')
            ->check('intel')
            ->assertDontSee('AMD');
    }


}


