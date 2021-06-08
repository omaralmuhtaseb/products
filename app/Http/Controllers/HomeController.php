<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Reports\ProductReport;
use App\Product;
use App\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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


}
