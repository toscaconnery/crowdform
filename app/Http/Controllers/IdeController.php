<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Idea;
use Auth;

class IdeController extends Controller
{
    public function tambahIdeBisnis(Request $request){
    	if(Auth::check()) {
    		$ide = new Idea();
	    	$ide->idea_name = $request->idea_name;
	    	$ide->idea_description = $request->idea_description;
	    	$ide->category_id = $request->category_id;
	    	$ide->team_id = Auth::user()->team_id;
	    	$ide->save();

	    	return back();
    	}
    	else {
    		return back();
    	}
    }
}
