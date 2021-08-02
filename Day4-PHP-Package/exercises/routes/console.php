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

Artisan::command('lowercase {text}', function () {
    $text = $this->argument('text');
    $this->line(strtolower($text));
})->purpose('lowercase');

Artisan::command('uppercase {text}', function () {
    $text = $this->argument('text');
    $this->line(strtoupper($text));
})->purpose('uppercase');

Artisan::command('capitalize {text}', function () {
    $text = $this->argument('text');
    $this->line(ucwords(strtolower($text)));
})->purpose('capitalize');