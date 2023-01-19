<?php

namespace Intellicore\PinGenerator\Console;

use Illuminate\Console\Command;
use Intellicore\PinGenerator\Facades\IntellicoreGenerate;

class IntellicoreCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'intellicore:generate {--digit=4}';

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
        $digit = $this->option('digit') ?? $this->ask('Enter the number of digit');
        $total = $this->ask('Enter the total number of pins to generate. (or press enter)');

        $pins = IntellicoreGenerate::emit($total, $digit);

        foreach ($pins as $pin) {
            $this->line($pin);
        }
    }
}
