<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Auth;
use App\Team;

class MessageController extends Controller
{
    //
    public function kirimPesan(Request $request) {
    	if(Auth::check()) {

    		$pesan = new Message();
	    	$pesan->type_id = Auth::user()->type_id;
	    	if ($pesan->type_id == 1){//untuk mahasiswa
	    		$namaTimTujuan = $request->destination;
	    		$timTujuan = Team::where('team_name', $namaTimTujuan)
	    						->get()->first();
	    		if(!is_null($timTujuan)) {
	    			$pesan->destination = $timTujuan->team_id;
	    		}
	    		else {
	    			//tim tidak ditemukan
	    		}
	    	}
	    	elseif ($pesan->type_id == 2){//untuk mentor
	    		if (isset(Auth::user()->team_id)) {
	    			$pesan->team_id = Auth::user()->team_id;
	    			$tim = Team::where('team_id', Auth::user()->team_id)
	    					->get()->first();
	    			if(isset($tim->mentor_id)) {
	    				$pesan->destination = $tim->mentor_id;
	    			}
	    			else {
	    				return back();
	    			}
	    		}
	    		else {
	    			return back();
	    		}
	    	}
	    	
	    	$pesan->user_id = Auth::user()->user_id;
	    	$pesan->message = $request->message;
	    	$pesan->subject = $request->subject;
	    	$pesan->save();
	    	return back();
    	}
    }
}
