<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function detail($id){
        return view('product.detail');
    }
}
