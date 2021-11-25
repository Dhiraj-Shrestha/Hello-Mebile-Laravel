<?php

namespace App\Console\Commands;

use App\Models\SecondhandProduct;
use Carbon\Carbon;
use Illuminate\Console\Command;

class DeleteExpiredSecondHandProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:deleteexpiredproduct';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete Secondhand product';

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
        $messages = SecondhandProduct::whereDate('expire_date','<', Carbon::now())->delete();
        echo"deleted";
    }
}
