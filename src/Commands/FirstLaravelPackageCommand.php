<?php

namespace Qt\FirstLaravelPackage\Commands;

use Illuminate\Console\Command;

class FirstLaravelPackageCommand extends Command
{
    public $signature = 'skeleton';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
