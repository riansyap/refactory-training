<?php

namespace Tests\Feature\Console;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TransformationTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_lowercase()
    {
        $this->artisan('lowercase "I aM CrAzY TeXT"')->expectsOutput('i am crazy text');

    }

    public function test_uppercase()
    {
        $this->artisan('uppercase "I aM CrAzY TeXT"')->expectsOutput('I AM CRAZY TEXT');

    }

    public function test_capitalize()
    {
        $this->artisan('capitalize "I aM CrAzY TeXT"')->expectsOutput('I Am Crazy Text');

    }
}
