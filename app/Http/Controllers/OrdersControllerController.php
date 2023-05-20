<?php

namespace App\Http\Controllers;

use App\Models\OrdersController;
use Illuminate\Http\Request;

class OrdersControllerController extends Controller

{
    public function index()
    {
        $orders = OrdersController::all();
        return view('admin.orders.index', compact('orders'));
    }

    /**
     * @param \Illuminate\http\Response
     */
    public function create()
    {
        $orders = OrdersController::all();
        return view('admin.orders.create', compact('orders'));
    }

    /**

     * @param \app\Models\Admin\Orders $order

     * @param \Illuminate\http\Response
     */

    public function stor(Request $request)
    {
        $order = new OrdersController;
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

        $orders = OrdersController::find($id);

        return view('admin.orders.edit', compact('orders'));
    }



    /**
     * @param \Illuminate\http\Request $request
     * @param \app\Models\Admin\Orders $orders
     * @param \Illuminate\http\Response
     */
    public function update(Request $request, $id)
    {
        $product = OrdersController::find($id);
        $order = new OrdersController;
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
        OrdersController::find($id)->delete();
        return redirect()->back();
    }
}
