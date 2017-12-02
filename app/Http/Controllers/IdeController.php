<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IdeController extends Controller
{
    public function tambahkanIde(Request $request){
    	$ide = new Idea();
    	$ide->idea_name = $request->name;
    	$ide->idea_description = $request->idea_description;
    	$ide->category_id = $request->category_id;
    	$ide->save();
    	return redirect('/');
    }
}
