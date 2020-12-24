<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function PageProducts()
    {
        return view('Navbar.Products');
    }
}
