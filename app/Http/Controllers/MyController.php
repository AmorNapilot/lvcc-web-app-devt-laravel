<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function showHomePage(Request $request)
    {
    	return view('homepage');
    }

    public function greetUser(Request $request, $name)
    {
    	return view('greet', [
    		'nick_name' => $name
    	]);
    }
}
