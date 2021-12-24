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
    public function test_page_exists(): void
    {
        $response = $this->get(route('user-list'));

        $response->assertStatus(200);
    }

    /**
     *
     *
     * @return void
     */
    public function test_see_header(): void
    {
        $response = $this->get(route('user-list'));

        $response->assertSeeText('User List');
    }

    /**
     *
     *
     * @return void
     */
    public function test_see_user_list(): void
    {
        $response = $this->get(route('user-list'));

        $response->assertSeeText('User 1');
        $response->assertSeeText('User 2');
    }

    /**
     *
     *
     * @return void
     */
    public function test_see_add_user_button(): void
    {
        $response = $this->get(route('user-list'));

        $response->assertSeeText('Add User');
    }
}
