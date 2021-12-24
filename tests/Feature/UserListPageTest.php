<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserListPageTest extends TestCase
{
    public function test_page_exists(): void
    {
        $response = $this->get(route('user-list'));

        $response->assertStatus(200);
    }

    public function test_see_header(): void
    {
        $response = $this->get(route('user-list'));

        $response->assertSeeText('User List');
    }

    public function test_see_user_list(): void
    {
        $response = $this->get(route('user-list'));

        $response->assertSeeText('User 1');
        $response->assertSeeText('User 2');
    }

    public function test_see_add_user_button(): void
    {
        $response = $this->get(route('user-list'));

        $response->assertSeeText('Add User');
    }

    public function test_can_add_user(): void
    {
        $user = new User;
        $user->name = 'Test User';
        $user->save();

        $response = $this->get(route('user-list'));

        $response->assertSeeText('Test User');
    }
}
