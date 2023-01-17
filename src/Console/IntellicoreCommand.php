<?php

namespace Intellicore\PinGenerator\Console;

use Illuminate\Console\Command;
use Intellicore\PinGenerator\Classes\Generator;

class IntellicoreCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'intellicore:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $total = $this->ask('Enter the total number of pins to generate. (default is 5)');
        $total = $total ?? 5;

        $generate= new Generator();
        $pins = $generate->emit($total);

        foreach ($pins as $pin) {
            $this->line($pin);
        }
    }
}