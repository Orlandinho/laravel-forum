<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
Use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    use DatabaseMigrations;

    public function test_a_user_can_browse_threads()
    {

        $response = $this->get('/threads');

        $response->assertStatus(200);
    }
}
