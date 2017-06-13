<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->limit(3)->get();

        return view('index', ['products' => $products]);
    }
}