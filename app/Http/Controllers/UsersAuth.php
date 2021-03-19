<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event\UserCreated;
class UsersAuth extends Controller
{
    //
    function index()
    {
    	event(new UserCreated("Email has been sent on your mail address"));
    }
}
