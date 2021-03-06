<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class ProductController extends Controller
{
    
    
    public function getAll()
    {
        $product = new Product;
        $products = $product->getAllProducts();

        return view('products', ['products' => $products]);
    }
    public function getOne($id){
        $product = new Product;
        $singleProduct = $product->getSingleProduct($id);
        return view('edit', ['singleProduct' => $singleProduct]);
    }
    public function createNew(Request $request)
    {   
        $product = new Product;
       return $product->createProduct();
    }
    public function updateItem(Request $request)
    {   
        $product = new Product;
       return $product->updateProduct();
    }
    public function deleteItem($id){
        $product = new Product;
        return $product->deleteProduct($id);
    }
}
