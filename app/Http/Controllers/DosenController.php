<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Biodata;

class DosenController extends Controller
{
    //
    public function setBiodata(Request $request){

    	$biodata = new Biodata();
    	$biodata->s1 = $request->s1;
    	$biodata->s1_year = $request->s1_year;
    	$biodata->s2 = $request->s2;
    	$biodata->s2_year = $request->s2_year;
    	$biodata->s3 = $request->s3;
    	$biodata->s3_year = $request->s3_year;
    	$biodata->specialities = $request->specialities;
    	$biodata->interest = $request->interest;
    	$biodata->hobby = $request->hobby;
    	$biodata->major = $request->major;
    	$biodata->user_id = $request->user_id;


    	$biodata->save();

    	return view('dashboard.profil');
    }

    public function getDosen(Request $request){

    	$dosen = DB::table('user')
    				->join('category_mentor', 'mentor_id', '=', 'user.user_id')
    				->join('category', 'category_id', '=', 'category_mentor.category_id')
    				->where('user.type_id', '=', 1)
    				->get();

        return $dosen;

    }

    public function getDosenDetail(Request $request){

    	$dosen = DB::table('user')
    				->join('category_mentor', 'mentor_id', '=', 'user.user_id')
    				->join('category', 'category_id', '=', 'category_mentor.category_id')
    				->join('biodata', 'user_id', '=', 'user.user_id')
    				->where('user.user_id', '=', $request->user_id)
    				->get();


    }
}
