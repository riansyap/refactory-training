<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('hello', function () {
    $message = 'Hello World';
    $this->line($message);
    $this->info($message);
    $this->comment($message);
    $this->question($message);
    $this->error($message);
    $name = $this->ask('Nama Anda?');
    $this->line('nama Anda adalah:'.$name);
    $password = $this->secret('Password?');
    $confirm = $this->confirm('Lanjut?', true);
    var_dump($confirm);
})->purpose('COba Hello');