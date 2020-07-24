<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyProfileController extends Controller
{
    public function create( Request $request )
	{
        $name = $request->get('name');
        $lastname = $request->get('lastname');

        $fullname = $name . " " . $lastname;
        $sensor_name = str_replace("a","*",$fullname);
        echo $sensor_name;


		return view("myprofile/create");
	}

    
    
}
