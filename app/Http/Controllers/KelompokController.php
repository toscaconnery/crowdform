<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\User;
use App\Team;
use App\UserTeam;
class KelompokController extends Controller
{
    public function dataKelompok(){
    	if (Auth::check()) {
    		$user = Auth::user();
    		$user_id = $user->user_id;
    		$this->data['punyaKelompok'] = DB::table('user_team')->where('user_id', $user_id)->count();

    		if($this->data['punyaKelompok'] > 0) {
    			$kelompok = DB::select('SELECT t.team_name, COUNT(u.id) AS jumlah
    												FROM user_team u, team t
    												WHERE t.team_id = u.team_id
    												GROUP BY t.team_name')->first();
    			$this->data['kelompok'] = $kelompok[0];
    		}
    		$this->data['jenisPaket'] = DB::table('package')->get();

    		return view('dashboard.datakelompok', $this->data);
    	}
    	dd("belum login");
    }

    public function tambahKelompok(Request $request) {
    	if (Auth::check()) {
    		$cekKetersedian = DB::table('team')->where('team_name', $request->team_name)->count();
    		if($cekKetersedian > 0) {
    			dd("udah ada"); //perlu penanganan lebih lanjut
    			return back();
    		}
    		else {
    			//dd(Auth::user()->user_id);
    			$tim = new Team();
    			$tim->team_name = $request->team_name;
    			$tim->package_id = $request->package_id;
    			$tim->save();
    			//dd($tim->team_id);
    			$userTeam = new UserTeam();
    			$userTeam->user_id = Auth::user()->user_id;
    			$userTeam->team_id = $tim->team_id;
    			$userTeam->save();
    			return redirect('/'); 
    		}
    	}
    }

    public function detailDataKelompok($id_kelompok) {
    	if (Auth::check()) {
    		$permission = DB::table('user_team')
    						->where('team_id', $id_kelompok)
    						->where('user_id', Auth::user()->user_id)
    						->count();
    		if ($permission) {
    			$this->data['kelompok'] = DB::table('team')->where('team_id', $id_kelompok)->get()->first();
    			$this->data['punyaIde'] = DB::table('idea')->where('team_id', $id_kelompok)->count();
    			if($this->data['punyaIde'] > 0) {
    				$this->data['ideKelompok'] = DB::table('idea')->where('team_id', $id_kelompok)->get()->first();
    			}
    			return view('dashboard.detaildatakelompok',$this->data);
    		}
    		else {
    			dd("Anda tidak termasuk dalam kelompok");
    		}
    	}
    }
}
