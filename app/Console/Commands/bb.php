<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class bb extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'DB:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'to get the DB name';

    /**
     * Execute the console command.
     */
    public function handle()
    {
          // Get the default connection
          $connection = config('database.default');

          // Get the database name
          $databaseName = config("database.connections.$connection.database");

          $this->info("The BB database name is: $databaseName");
    }
}
