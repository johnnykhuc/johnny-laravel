<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about()
    {
    	$name = 'Johnny <span style="color: red;"> Khuc </span> <script>alert("hi");</script>';
    	$first = 'Jerry';
    	$last = 'Luyen';
    	return view('pages.about', compact('first', 'last'));
	}
}
