<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->limit(3)->get();
        $categories = DB::table('categories')->limit(5)->get();


        return view('index', ['products' => $products, 'categories' => $categories]);
    }
}
