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
    		$this->data['jumlahTim'] = DB::table('user_team')->where('user_id', $user_id)->count();

    		if($this->data['jumlahTim'] > 0) {
    			//$this->data['listTim'] = DB::table('user_team')->where('user_id', $user_id)->get();
    			$this->data['listTim'] = DB::select('SELECT t.team_name, COUNT(u.id) AS jumlah
    												FROM user_team u, team t
    												WHERE t.team_id = u.team_id
    												GROUP BY t.team_name');
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
}
