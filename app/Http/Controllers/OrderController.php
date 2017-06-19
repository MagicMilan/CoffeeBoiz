<?php

namespace App\Http\Controllers;

use App\OrderItem;
use App\Product;
use Illuminate\Http\Request;

use App\Cart;
use App\Order;
use Auth;
use App\CartItem;

class OrderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function checkout()
    {
        //Retrieve cart information
        $cart = Cart::where('user_id', Auth::user()->id)->first();
        $items = $cart->cartItems;
        $total = 0;
        foreach ($items as $item) {
            $total += $item->product->price;
        }

        // Make order
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->total_price = $total;

        $order->save();

        foreach ($items as $item) {
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $item->product->id;
            $orderItem->save();

            CartItem::destroy($item->id);
        }
        return redirect('/order/' . $order->id);
    }

    public function viewOrder($orderId)
    {
        $order = Order::find($orderId);
        return view('orders.view', ['order' => $order]);
    }

    public function viewOrders()
    {
        $orders = Order::where('send', 0)->where('not_send', 0)->get();
        $items = OrderItem::all();
        $products = Product::all();
        return view('orders.orders', ['orders' => $orders, 'items' => $items, 'products' => $products]);
    }

    public function viewSend()
    {
        $orders = Order::where('send', 1)->where('not_send', 0)->get();
        $items = OrderItem::all();
        $products = Product::all();
        return view('orders.send', ['orders' => $orders, 'items' => $items, 'products' => $products]);
    }

    public function viewNotSend()
    {
        $orders = Order::where('send', 0)->where('not_send', 1)->get();
        $items = OrderItem::all();
        $products = Product::all();
        return view('orders.not_send', ['orders' => $orders, 'items' => $items, 'products' => $products]);
    }

    public function setSend($id)
    {
        $order = Order::findOrFail($id);

        $order->send = true;

        $order->save();

        return redirect("/orders");
    }

    public function setNotSend($id)
    {
        $order = Order::findOrFail($id);

        $order->not_send = true;

        $order->save();

        return redirect("/orders");
    }
}
