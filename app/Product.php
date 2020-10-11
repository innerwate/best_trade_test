<?php

namespace App;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Product extends Model
{
    public function getAllProducts(){
        $products = DB::table('products')->get();
        return $products;
    }
    

}
