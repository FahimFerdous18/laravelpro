<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class UserController extends Controller
{
    public function index()
    {
    	//$user=User::all();
    	//$user=DB::table('users')->join('phones','users.id','phones.user_id')->get();
    	//return view('numbers',compact('user'));
    }
}
