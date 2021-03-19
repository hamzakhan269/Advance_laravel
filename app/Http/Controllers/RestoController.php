<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resturant;
use Session;
class RestoController extends Controller
{
    //
    function index()
    {
    	return view('home');
    }
    function list() 
    {
    	$data=Resturant::all();
    	return view('list',["data"=>$data]);
    }
    function add(Request $req) 
    {
    	// return $req->input();
    	$resto= new Resturant;
    	$resto->name=$req->input('name');
    	$resto->email=$req->input('email');
    	$resto->address=$req->input('address');
    	$resto->save();
    	$req->session()->flash('status','Resturant added succesfully');
    	return redirect('list');
    }
    function delete($id) 
    {
    		echo Resturant::find($id)->delete();
    		Session::flash('status','Resturant deleted succesfully');
    	return redirect('list');
    }
}
