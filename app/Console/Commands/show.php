<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class show extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'show:myname';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command will perform predefined task';

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
     * @return mixed
     */
    public function handle()
    {
       echo "Hello amit pandit";
    }
}
