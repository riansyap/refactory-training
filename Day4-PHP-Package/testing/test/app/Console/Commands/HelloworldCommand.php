<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Process\Process;

class HelloworldCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hello-world {name=World} {--uppercase}';

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
        $name = $this->argument('name');
        $uppercase = $this->option('uppercase');
        if($uppercase){
            $name = strtoupper($name);
        }
        $this->info($name);
        $this->notify($name,'Body');
        $response = \Http::get('https://httpbin.org/get');
        $this->line($response);
        Storage::append('./contoh.txt', now());
        \Log::info('testing');
        $process = new Process(['C:\Program Files\wkhtmltopdf\bin\wkhtmltoimage.exe','php.net','gambar-php.png']);
        $process->run();
        $this->line($process->getOutput());
    }
}
