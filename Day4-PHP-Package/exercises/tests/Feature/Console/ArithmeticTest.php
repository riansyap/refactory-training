<?php

namespace Tests\Feature\Console;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ArithmeticTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_add()
    {
        $this->artisan('add 1 4 5 2 3')->expectsOutput('15');
    }

    public function test_subtract()
    {
        $this->artisan('subtract 10 2 4')->expectsOutput('4');
    }

    public function test_multiply()
    {
        $this->artisan('multiply 3 5 8')->expectsOutput('120');
    }

    public function test_divide()
    {
        $this->artisan('divide 100 5 2')->expectsOutput('10');
    }
}
