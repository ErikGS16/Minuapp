<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use Faker\Factory;
use Illuminate\Contracts\Auth\Factory as AuthFactory;

class RoutesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_mainPageLoadsCorrectly()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_testPageLoadsCorrectly()
    {
        $response = $this->get('/test');

        $response->assertStatus(200);
    }

    public function test_signInLoadsCorrectly()
    {
        $response = $this->get('/signin');

        $response->assertStatus(200);
    }
}