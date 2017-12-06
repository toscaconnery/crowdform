<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Auth;
use App\Team;
use DB;

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

    public function inbox() {
    	if(Auth::check()){
    		if(Auth::user()->type_id == 1) { // dosen
	    		$this->data['inbox'] = Message::where('destination', Auth::user()->user_id)->get();
	    		$this->data['listInbox'] = $this->data['inbox'];
	    		$listTim = Team::get();
	    		$this->data['tim'] = array();
	    		foreach($listTim as $b) {
	    			$this->data['tim'][$b->team_id] = $b->team_name;
	    		}
	    		return view('dashboard.kotakmasuk', $this->data);
    		}
    		elseif(Auth::user()->type_id == 2) { // mahasiswa
    			//cek punya tim
    			if(isset(Auth::user()->team_id)) {
    				$tim = Auth::user()->team_id;
    				$this->data['inbox'] = Message::where('destination', Auth::user()->team_id)->get();
    				$this->data['listInbox'] = $this->data['inbox'];
    				return view('dashboard.kotakmasuk', $this->data);
    			}
    		}
    	}
    	return back();
    }

}
