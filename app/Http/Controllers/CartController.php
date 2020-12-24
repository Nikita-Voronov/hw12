<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function PageCart()
    {
        return view('Navbar.Cart');
    }
}
