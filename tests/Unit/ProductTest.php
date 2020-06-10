<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
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
