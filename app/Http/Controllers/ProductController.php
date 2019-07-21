<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductController extends Controller
{
    public function show($id)
    {
        return Products::with("images")->find($id);
    }
    public function showAll()
    {
        return Products::take(100)->get();
    }
}
