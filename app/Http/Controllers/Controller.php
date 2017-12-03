<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function cekNotifikasi() {
    	//sebelum masuk ke fungsi ini sudah harus dicek autentikasinya

    	$notifikasi = Array();
    	$x = 0;

    	//cek invitation
    	$invitation = DB::table('invitation')
    					->where('user_id', Auth::user()->user_id)
    					->where('status', 'Belum dikonfirmasi')
    					->get()
    					->first();
    	if($invitation != NULL) {
    		$tim = DB::table('team')->where('team_id', $invitation->team_id)->get()->first();
    		$notifikasi[$x] = array();
    		$notifikasi[$x][0] = "invitation";
    		$notifikasi[$x][1] = $tim->team_name;
    		$notifikasi[$x][2] = $invitation->team_id;
    		$x++;	
    	}
    	
    	return $notifikasi;
    }

    public function cekJumlahNotifikasi($listNotifikasi) {
    	$jumlahNotifikasi = 0;
    	foreach($listNotifikasi as $notifikasi) {
    		$jumlahNotifikasi++;
    	}
    	return $jumlahNotifikasi;
    }
}
