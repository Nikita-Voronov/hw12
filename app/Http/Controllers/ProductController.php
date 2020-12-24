<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function PageProduct_id1()
    {
        return view('Product.product_id1');
    }
    public function PageProduct_id2()
    {
        return view('Product.product_id2');
    }
    public function PageProduct_id3()
    {
        return view('Product.product_id3');
    }
    public function PageProduct_id4()
    {
        return view('Product.product_id4');
    }

}
