<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // show product page
    public function index()
    {
        return view('products.products');
    }

    // show iframe fb
    public function fb()
    {
        return view('products.social.fb');
    }

    // show iframe tw
    public function twitter()
    {
        return view('products.social.twitter');
    }

    // show iframe tw
    public function pin()
    {
        return view('products.social.pin');
    }
}