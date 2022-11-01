<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function show()
    {
        # code...
        return view('products.ListProducts');
    }
}
