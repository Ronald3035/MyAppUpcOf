<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;

class CareerController extends Controller
{
     public function career(){
     	$career=Career::where('state','1')->paginate(2);
    	return view('admin/career')->with('career', $career);
    	
	}
}
