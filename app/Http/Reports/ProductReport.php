<?php
namespace App\Http\Reports;

use App\Product;
use Illuminate\Support\Facades\DB;

class ProductReport{

    public function WeekReport(){

        $data =DB::table('products')
            ->select(DB::raw('count(*) as count') ,
                DB::raw('date(created_at) as date'))
            ->groupBy('date')
            ->orderBy('date','ASC')
            ->get();

        return $data ;


    }
}