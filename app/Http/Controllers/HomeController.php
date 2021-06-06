<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $categories_count = Category::count();
        $products_count = Product::count();
        $users_count = User::count();
        $user_products_count = count(Auth::user()->Products);

        return view('home',
            compact('categories_count','products_count',
                    'users_count','user_products_count'));
    }
}
