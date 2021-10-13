<?php

namespace Tests\Feature\Models;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase; // migrate

    public function test_user()
    {
        // Proceso
        User::factory()->create([
            'email' => 'v@admin.com'
        ]);
        
        $this->assertDatabaseHas('users', [
            'email' => 'v@admin.com'
        ]);

        $this->assertDatabaseMissing('users', [
            'email' => 'no@existe.com'
        ]);
    }
}
