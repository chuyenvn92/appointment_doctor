<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class DashboardController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	if(Auth::user()->role->id == 3){
    		return view('welcome');
    	}
    	return view('dashboard');
    }
}
