<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testProductsAreCreatedCorrectly(){
    	$payload = [
            'name' => 'Lorem',
            'category' => 'Ipsum, Lorem',
            'sku'=>202020,
            'price'=>20.0,
        ];

        $this->json('POST', '/api/products', $payload)
            ->assertStatus(200)
            ->assertJson(['id' => 1, 'name' => 'Lorem', 'category' => 'Ipsum Lorem', 'sku'=>202020, 'price'=>20.0]);
    }
    }
}
