<?php

namespace Tests\Feature\Console;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PalindromeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_1()
    {
        $this->artisan('palindrome "Saya ingin pergi ke pasar"')->expectsOutput('Is palindrome? No');
    }

    public function test_2()
    {
        $this->artisan('palindrome "Kasur ini rusak"')->expectsOutput('Is palindrome? Yes');
    }

    public function test_3()
    {
        $this->artisan('palindrome "Ibu Ratna antar ubi"')->expectsOutput('Is palindrome? Yes');
    }

    public function test_4()
    {
        $this->artisan('palindrome "Aku suka rajawali, bapak. Apabila wajar, aku suka."')->expectsOutput('Is palindrome? Yes');
    }
}
