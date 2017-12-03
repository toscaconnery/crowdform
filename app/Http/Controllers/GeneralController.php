<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use DB;
use Auth;


class GeneralController extends Controller
{
    //
    public function getCategory(Request $request){
    	return Category::all();
    }
}
