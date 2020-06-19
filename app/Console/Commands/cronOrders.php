<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class cronOrders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:orders';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Refresh orders';

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
        $table = DB::table('orders_reservations')->get();
        foreach ($table as $row)
        {
            $created = new Carbon($row->date_start);
            $diff = $created->diffInMinutes(Carbon::now());

            if ($diff > 30)
            {
                DB::table('orders_reservations')
                    ->where('id', $row->id)
                        ->delete();
            }
        }
    }
}
