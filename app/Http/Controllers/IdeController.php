<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Idea;
use Auth;
use DB;

class IdeController extends Controller
{
    public function tambahIdeBisnis(Request $request){
    	if(Auth::check()) {
    		$ide = new Idea();
	    	$ide->idea_name = $request->idea_name;
	    	$ide->idea_description = $request->idea_description;
	    	$ide->category_id = $request->category_id;
	    	$ide->team_id = Auth::user()->team_id;

            $file = $request->file('idea_photo');

            $destination = public_path('uploads');
            $file->move($destination, $file->getClientOriginalName());
            $ide->idea_photo = 'uploads/' . $file->getClientOriginalName();

	    	$ide->save();

	    	return back();
    	}
    	else {
    		return back();
    	}
    }

    public function editIdeBisnis($id_ide, Request $request) {
    	if(Auth::check()) {
    		$permission = DB::table('idea')
    						->where('team_id', Auth::user()->team_id)
    						->where('idea_id', $id_ide)
    						->count();
    		if($permission == 1) {
    			$ide = Idea::where('idea_id', $id_ide)
    						->get()
    						->first();
    			$ide->idea_name = $request->idea_name;
    			$ide->idea_description = $request->idea_description;
    			$ide->category_id = $request->category_id;
    			$ide->save();
    			return back();
    		}
    		else {
    			return back();
    		}
    	}
    	else {
    		return back();
    	}
    }

    public function ideBisnis() {
    	if(Auth::check()) {
    		$this->data['notifikasi'] = $this->cekNotifikasi();
    		$this->data['jumlahNotifikasi'] = $this->cekJumlahNotifikasi($this->data['notifikasi']);
    	}
    	$this->data['listIde'] = DB::select('SELECT t.team_name, i.*
    											FROM idea i, team t
    											WHERE t.team_id = i.team_id');
    	return view('dashboard.idebisnis', $this->data);
    }

    public function detailIde($id_ide) {
        if(Auth::check()) {
            $this->data['notifikasi'] = $this->cekNotifikasi();
            $this->data['jumlahNotifikasi'] = $this->cekJumlahNotifikasi($this->data['notifikasi']);
        }
        $this->data['detailIde'] = Idea::where('idea_id', $id_ide)->first();
        return view('dashboard.detailide', $this->data);
    }

}
