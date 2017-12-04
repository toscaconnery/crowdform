<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\User;
use App\Team;
use App\Invitation;
class KelompokController extends Controller
{
    // public function dataKelompok(){
    // 	if (Auth::check()) {
    // 		$user = Auth::user();
    // 		$user_id = $user->user_id;
    // 		$this->data['punyaKelompok'] = DB::table('user_team')->where('user_id', $user_id)->count();

    // 		if($this->data['punyaKelompok'] > 0) {
    // 			$kelompok = DB::select('SELECT t.team_name, COUNT(u.id) AS jumlah
    // 												FROM user_team u, team t
    // 												WHERE t.team_id = u.team_id
    // 												GROUP BY t.team_name')->first();
    // 			$this->data['kelompok'] = $kelompok[0];
    // 		}
    // 		$this->data['jenisPaket'] = DB::table('package')->get();

    // 		return view('dashboard.datakelompok', $this->data);
    // 	}
    // 	dd("belum login");
    // }

    public function buatKelompok(Request $request) {
    	if (Auth::check()) {
    		$cekKetersedian = DB::table('team')->where('team_name', $request->team_name)->count();
    		if($cekKetersedian > 0) {
    			dd("udah ada"); //perlu penanganan lebih lanjut
    			return back();
    		}
    		else {
    			$tim = new Team();
    			$tim->team_name = $request->team_name;
    			$tim->description = $request->description;
    			$tim->package_id = $request->package_id;
    			$tim->leader_id = Auth::user()->user_id;
    			$tim->save();

    			$user = Auth::user();
    			$user->team_id = $tim->team_id;
    			$user->save();
    			
    			return back(); 
    		}
    	}
    }

    public function detailDataKelompok() {
    	if (Auth::check()) {
    		if (Auth::user()->team_id == NULL) {
    			$this->data['punyaKelompok'] = 0;
    		}
    		else {
    			$this->data['punyaKelompok'] = 1;
    		}
    		$this->data['punyaIde'] = 0;
    		if($this->data['punyaKelompok'] == 1) {
    			$id_kelompok = Auth::user()->team_id;
    			$this->data['kelompok'] = DB::table('team')->where('team_id', $id_kelompok)->get()->first();
    			$this->data['punyaIde'] = DB::table('idea')->where('team_id', $id_kelompok)->count();
    			if($this->data['punyaIde'] > 0) {
    				$this->data['ideKelompok'] = DB::table('idea')->where('team_id', $id_kelompok)->get()->first();
    			}
    			$this->data['anggotaKelompok'] = DB::table('users')->where('team_id', $id_kelompok)->get();
    		}

    		$this->data['jenisPaket'] = DB::table('package')->get();
    		$this->data['jenisKategori'] = DB::table('category')->get();
    		$this->data['notifikasi'] = $this->cekNotifikasi();
    		$this->data['jumlahNotifikasi'] = $this->cekJumlahNotifikasi($this->data['notifikasi']);

    		return view('dashboard.detaildatakelompok', $this->data);
    	}
    	else {
    		return back();
    	}
    }

    public function tambahkanAnggotaKelompok(Request $request) {
    	$user = DB::table('users')->where('email', $request->email)->get()->first();
    	$invitation = new Invitation();
    	$invitation->user_id = $user->user_id;
    	$invitation->team_id = Auth::user()->team_id;
    	$invitation->status = "Belum dikonfirmasi"; 	
    	$invitation->save();
    	return back();
    }

    public function masukKelompok($id_kelompok) {
    	$user = Auth::user();
    	$user->team_id = $id_kelompok;
    	$user->save();

    	$invitation = Invitation::where('user_id', Auth::user()->user_id)
    					->where('team_id', $id_kelompok)
    					->where('status', "Belum dikonfirmasi")
    					->get()
    					->first();
    	$invitation->status = "Dikonfirmasi";
    	$invitation->save();
    	return back();
    }

    public function abaikanKelompok($id_kelompok) {
    	$invitation = Invitation::where('user_id', Auth::user()->user_id)
    					->where('team_id', $id_kelompok)
    					->where('status', "Belum dikonfirmasi")
    					->get()
    					->first();
    	$invitation->status = "Ditolak";
    	$invitation->save();
    	return back();
    }

    public function pilihMentorTim(Request $request) {
        if (Auth::check()) {
        	dd("masuk fungsi milih dosen");
            $user = Auth::user();
            if(isset($user->team_id)) {
                dd("punya tim");
            }
            else {
                dd("nggak punya tim");
            }
        }
    }

}
