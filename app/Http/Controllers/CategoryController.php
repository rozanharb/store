<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }


    /**
     * @param \Illuminate\http\Response
     */

    public function create()
    {
        $categories = Category::all();
        return view('admin.categories.create', compact('categories'));
    }

    /**

     * @param \app\Models\Admin\Category $category
     * @param \Illuminate\http\Response
     */

    public function stor(Request $request)
    {
        $categories = new Category;
        $categories->name = $request->name;

        $categories->save();

        return redirect()->back();
    }

    /**

     * @param \app\Models\Admin\Category $category
     * @param \Illuminate\http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        //  $products= $category->products[1];
        //  $products= $category->products;
        //  dd($products);
        return view('admin.categories.edit', compact('categories'));
    }



    /**
     * @param \Illuminate\http\Request $request
     * @param \app\Models\Admin\Category $category
     * @param \Illuminate\http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category = new Category;
        $category->name = $request->name;

        $category->save();

        return redirect('categories');
    }
    /**

     * @param \app\Models\Admin\Category $category
     * @param \Illuminate\http\Response
     */

    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect()->back();
    }
}
