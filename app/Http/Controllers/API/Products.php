<?php

namespace App\Http\Controllers\API;	
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Validator;
class Products extends Controller
{
    //for saving prodcuts 
    // function save(Request $req) 
    // {
    // 	$prodcut = New Product;
    // 	$prodcut->name=$req->name;
    // 	$prodcut->category=$req->category;
    // 	$prodcut->price=$req->price;
    	
    // 	if ($prodcut->save())
    // 	{
    // 		return "product has been saved";
    // 	}
    // }
    // for updating products
    // function update(Request $req)
    // {
    // 	$product= Product::find($req->id);
    // 	$product->category=$req->category;
    // 	if($product->save())
    // 	{
    // 		return ['Result'=>'success',"msg"=>"data is updated"];
    // 	}
    // }
    // saving product by validation
    // function save(Request $req)
    // {
    // 	$valid= Validator::make($req->all(),[
    // 		'name'=>"required",
    // 		'category'=>"required",
    // 		'price'=>"required",
    // 	]);
    // 	if($valid->fails())
    // 	{
    // 		return response()->json(['error'->$valid->errors()],401);
    // 	}
    // 	$prodcut = New Product;
    // 	$prodcut->name=$req->name;
    // 	$prodcut->category=$req->category;
    // 	$prodcut->price=$req->price;
    // 	$prodcut->save();
    // }
    
}
