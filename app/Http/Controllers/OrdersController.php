<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $orders = Orders::all();
        return view('admin.orders.index', compact('orders'));
    }

    /**
     * @param \Illuminate\http\Response
     */
    public function create()
    {
        $orders = Orders::all();
        return view('admin.orders.create', compact('orders'));
    }

    /**

     * @param \app\Models\Admin\Orders $order

     * @param \Illuminate\http\Response
     */

    public function stor(Request $request)
    {
        $order = new Orders;
        $order->name = $request->name;

        $order->price = $request->price;
        $order->destreption = $request->destreption;
        $order->save();

        return redirect()->back();
    }

    /**
     * @param \app\Models\Admin\Orders $orders
     * @param \Illuminate\http\Response
     */
    public function edit($id)
    {

        $orders = Orders::find($id);

        return view('admin.orders.edit', compact('orders'));
    }



    /**
     * @param \Illuminate\http\Request $request
     * @param \app\Models\Admin\Orders $orders
     * @param \Illuminate\http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Orders::find($id);
        $order = new Orders;
        $order->name = $request->name;

        $order->price = $request->price;
        $order->destreption = $request->destreption;
        $order->save();


        return redirect('orders');
    }
    /**
     * @param \app\Models\Admin\Orders $orders
     * @param \Illuminate\http\Response
     */
    public function destroy($id)
    {
        Orders::find($id)->delete();
        return redirect()->back();
    }
}
