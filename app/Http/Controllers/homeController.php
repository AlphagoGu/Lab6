<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class homeController extends BaseController
{
	function index(){
		$home = "Home Page";
		return view('welcome',['hometext'=>$home]);
	}
}
