<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserListPageTest extends TestCase
{
    /**
     *
     *
     * @return void
     */
    public function test_route_exists(): void
    {
        $response = $this->get(route('user-list'));

        $response->assertStatus(200);
    }
}
