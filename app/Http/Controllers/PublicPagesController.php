<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PublicPagesController extends Controller
{
    //
    public function getWelcome()
    {
	    return view('public.welcome');
    }
}
