<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->admin = User::findOrFail(1);
    }

    public function testOne()
    {
        $response = $this->actingAs($this->admin)
            ->json('GET', '/users');

        $response->assertStatus(200);
    }

    public function testTwo()
    {
        $response = $this->actingAs($this->admin)
            ->json('GET', '/users');

        $response->assertStatus(200);
    }
}
