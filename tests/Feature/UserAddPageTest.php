<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserAddPageTest extends TestCase
{
    public function test_page_exists(): void
    {
        $response = $this->get(route('users.create'));

        $response->assertStatus(200);
    }

    public function test_see_header(): void
    {
        $response = $this->get(route('users.create'));

        $response->assertSeeText('Add User');
    }

    public function test_can_add_user(): void
    {
        $user = new User;
        $user->name = str_random(10);
        $user->save();

        $response = $this->get(route('user-list'));

        $response->assertSeeText($user->name);
    }
}
