<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    public function getAll(){
        $product = new Product();
        $products = $product -> getAllProducts();
      
        return view('products', ['products' => $products]);
    }
}