<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * @param \Illuminate\http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    /**

     * @param \app\Models\Admin\Products $product
     * @param \Illuminate\http\Response
     */

    public function stor(Request $request)
    {
        $product = new Products;
        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->category_id = $request->category;
        $product->destreption = $request->destreption;
        $product->save();

        return redirect()->back();
    }

    /**
     * @param \app\Models\Admin\Products $product
     * @param \Illuminate\http\Response
     */
    public function edit($id)
    {

        $product = Products::find($id);
        $categories = Category::all();
        $category_name = Category::where('id', $product->category_id)->first();
        return view('admin.product.edit', compact('product', 'categories', 'category_name'));
    }



    /**
     * @param \Illuminate\http\Request $request
     * @param \app\Models\Admin\Products $product
     * @param \Illuminate\http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Products::find($id);
        $product = new Products;
        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->category_id = $request->category;
        $product->destreption = $request->destreption;
        $product->save();

        return redirect('product');
    }
    /**
     * @param \app\Models\Admin\Products $product
     * @param \Illuminate\http\Response
     */
    public function destroy($id)
    {
        Products::find($id)->delete();
        return redirect()->back();
    }
}
