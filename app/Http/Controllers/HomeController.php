<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Reports\ProductReport;
use App\Product;
use App\User;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('dataFactory');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $report = (new ProductReport())->WeekReport();

        $categories_count = Category::count();
        $products_count = Product::count();
        $users_count = User::count();

        return view('home')
            ->with('categories_count',$categories_count)
            ->with('products_count',$products_count)
            ->with('users_count',$users_count)
            ->with('report',$report);
    }


    public function dataFactory(){

        for ($i=1 ; $i<1000 ; $i++){
            DB::table('products_categories')
                ->insert(['product_id'=>random_int(1,1000),
                    'category_id'=>random_int(1,20),
                    'created_at'=>\Illuminate\Support\Carbon::now(),
                    'updated_at'=>\Illuminate\Support\Carbon::now()

                ]);
        }
        factory(User::class, 100)->create();

        factory(Category::class, 20)->create();

        factory(Product::class, 1000)->create();

    }


}
