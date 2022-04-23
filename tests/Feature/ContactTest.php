<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactTest extends TestCase
{
    use WithoutMiddleware;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    /** @test */
    public function user_can_add_contact()
    {
        $this->post('contacts/create', ['name' => 'Mariana', 'contact' => '000000000', 'email' => 'mariana@gmail.com']);
        $this->assertDatabaseHas('contacts', ['name' => 'Mariana', 'contact' => '000000000', 'email' => 'mariana@gmail.com']);
    }
}
