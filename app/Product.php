<?php

namespace App;

use Illuminate\Auth\Events\Failed;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Product extends Model
{
    public function getAllProducts(){
        $products = DB::table('products')->get();
        return $products;
    }
    public function createProduct(){
        $request = request();
        
        $vendor = $request->vendor;
        $title = $request->title;
        $images=array();
        $counter = 0;
         if($files=$request->file('images')){
             
            foreach($files as $file){
                $counter++;
                $name=$file->getClientOriginalName();
                $file->move('image',$name);
                $images[]=$name;
            }
        }
       $newProduct = DB::table('products')->insert( [
            'vendor' => $vendor,
            'title' => $title,
            'images'=>  implode("|",$images)
        ]);
        if(empty($newProduct)){
            $data['message'] = 'Failed';
        
        }
        else{
            $data['message'] = 'Success';
        }
        return response()->json($data);
    }
    

}
