<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // show product page
    public function index()
    {
        return view('products.index');
    }
}