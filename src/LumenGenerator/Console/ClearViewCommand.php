<?php

namespace Kodmanyagha\LumenGenerator\Console;

use Illuminate\Console\Command;

class ClearViewCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'view:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear all compiled view files.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $cachedViews = storage_path('/framework/views/');
        $files       = glob($cachedViews . '*');
        foreach ($files as $file) {
            if (is_file($file)) {
                @unlink($file);
            }
        }
    }
}
