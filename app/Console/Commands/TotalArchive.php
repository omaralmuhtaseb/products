<?php

namespace App\Console\Commands;

use App\Category;
use App\Product;
use App\User;
use Illuminate\Console\Command;

class TotalArchive extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'total:archive';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a total archive daily at 2:00 am';

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
        $total_products =\App\Product::count();
        $total_categories =\App\Category::count();
        $total_users =\App\User::count();

        \App\TotalArchive::insert([
            'total_products'=>$total_products ,
            'total_categories'=>$total_categories ,
            'total_users'=> $total_users,
            'created_at' =>today()->format('Y-m-d H:i'),
            'updated_at' =>today()->format('Y-m-d H:i')

        ]);
    }
}
