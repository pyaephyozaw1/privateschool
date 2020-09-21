<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function indexfun($value=''){
    	return view('frontend.index');
    }

    public function contactfun($value=''){
    	return view('frontend.contact_us');
    }

    public function loginfun($value=''){
    	return view('frontend.login');
    }
     public function aboutfun($value=''){
    	return view('frontend.about');
    }
       
    
       
}
