<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class FormController extends Controller
{
    public function showRegistration(Request $request)
    {
    	return view('registration-form');
    }

    public function processRegistration(Request $request)
    {
    	$full_name = $request->full_name;
    	$age = $request->age;
    	$address = $request->address;

    	$member = new Member;
    	$member->full_name = $full_name;
    	$member->age = $age;
    	$member->address = $address;
    	$member->save();

    	return view('registration-complete', [
    		'full_name' => $full_name,
    		'age' => $age,
    		'address' => $address
    	]);
    }
}
