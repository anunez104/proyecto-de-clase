<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return "Show products";
    }

    public function create()
    {
        return "Show form to create a product";
    } 

    public function show($idProduct)
    {
        return "Show a single product" . $idProduct;
    }
}
