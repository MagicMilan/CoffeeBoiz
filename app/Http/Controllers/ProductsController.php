<?php

namespace App\Http\Controllers;


use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Auth;
use DB;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = DB::table('categories')->limit(5)->get();

        return view('products.products', ['products' => $products, 'categories' => $categories]);
    }

    public function create()
    {
        $categories = Category::all();

        return view('products.create', compact('categories'));
    }


    public function store(Request $request)
    {
//        $this->validate($request, [
//        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//    ]);

        /*
         * Image naam veranderen naar timestamp_user->id en opslaan.
         */
        $imageName = time() . "_" . Auth::user()->id . "." . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);

        $product = new Product;
        $product->user_id = Auth::user()->id;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->image = $imageName;


        $product->save();

        return redirect('/products');
    }

    public function show($id)
    {
        return view('products.product');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();


        return View('products.edit')->with('product', $product)->with('categories', $categories);
    }

    public function update(Request $request, $id)
    {
        $imageName = time() . "_" . Auth::user()->id . "." . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);

        $product = Product::findOrFail($id);

        $product->user_id = Auth::user()->id;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->image = $imageName;



        $product->save();

        return redirect("/products");
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        return view('products.delete', compact('product'));
    }

    public function destroy($id)
    {
        Product::destroy($id);

        return redirect("/products");
    }
}
