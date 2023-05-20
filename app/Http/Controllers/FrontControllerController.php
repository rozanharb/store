<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class FrontControllerController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return view('home.index', compact('products'));
    }
}
