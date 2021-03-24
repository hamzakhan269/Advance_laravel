<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resturant;
use Session;
use App\User;
use Crypt;
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
    function edit($id)
    {
    	$data=Resturant::find($id);
    	return view('edit',["data"=>$data]);
    	return redirect('list');

    }
     function update(Request $req) 
    {
    	
    	$resto= Resturant::find($req->input('id'))  ;
    	$resto->name=$req->input('name');
    	$resto->email=$req->input('email');
    	$resto->address=$req->input('address');
    	$resto->save();
    	$req->session()->flash('status','Resturant updated succesfully');
    	return redirect('list');
    }
    function register(Request $req)
    {
    	// echo Crypt::encrypt('123@abc');
    	// return $req->input();
    	$user= New User;
    	$user->name=$req->input('name');
    	$user->email=$req->input('email');
    	$user->password=Crypt::encrypt($req->input('password'));
    	$user->contact=$req->input('contact');
    	$user->save();
    	$req->session()->put('user',$req->input('name'));
    	return redirect('/');
    }
    function login(Request $req)
    {
    	$user= User::where("email",$req->input('email'))->get();
    	if( Crypt::decrypt($user[0]->password)== $req->input('password'))
    	{
    		$req->session()->put('user',$user[0]->name);
    	return redirect('/');
    	}
    }
}
