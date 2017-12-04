<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Type;

class DashboardController extends Controller
{
    public function dashboardHome(){
    	if (Auth::check()) {
    		$this->data['tipeUser'] = Type::where('type_id', Auth::user()->type_id)->get()->first();
    		$this->data['notifikasi'] = $this->cekNotifikasi();
    		$this->data['jumlahNotifikasi'] = $this->cekJumlahNotifikasi($this->data['notifikasi']);
    		return view('dashboard.home', $this->data);
    	}
    	else {
    		return redirect('/');
    	}
    }
}
