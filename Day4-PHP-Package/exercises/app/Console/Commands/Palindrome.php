<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Palindrome extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'palindrome {text}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $text = $this->argument('text');
        $newText = strtolower(preg_replace('/[^a-z0-9]/i', '', $text));
        $reverse = strrev($newText);
        if($newText==$reverse){
            $this->line('Is palindrome? Yes');
        }
        else $this->line('Is palindrome? No');
    }
}
