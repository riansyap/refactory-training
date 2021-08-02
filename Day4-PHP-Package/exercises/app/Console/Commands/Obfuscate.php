<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Obfuscate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'obfuscate {text}';

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
        $result = preg_replace_callback('/./', function($m) {
            return '&#'.ord($m[0]).';';
        },
        $text);
        $this->line($result);
    }
}
