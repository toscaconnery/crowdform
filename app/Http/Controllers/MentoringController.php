<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mentoring;
use App\Team;
use Illuminate\Support\Facades\DB;


class MentoringController extends Controller
{
    //
    public function setMentoring(Request $request){

        $file = $request->file('mentoring_photo');

        $destination = public_path('uploads');
        $file->move($destination, $file->getClientOriginalName());
        $user_photo = 'uploads/' . $file->getClientOriginalName();

    	$mentoring = new Mentoring();
    	$mentoring->team_id = $request->team_id;
    	$mentoring->mentoring_description = $request->mentoring_description;
    	$mentoring->mentoring_photo = $user_photo;
    	$mentoring->filled_by = $request->filled_by;
    	$mentoring->time_start = $request->time_start;
    	$mentoring->time_end = $request->time_end;
    	$mentoring->date = $request->date;
    	$mentoring->save();

    	if($request->filled_by == 1){
    		$team = DB::table('team')->where('team_id', '=', $request->team_id)->increment('mentoring_count');
    	}

        // dd($mentoring);
        // 
        return view('dashboard.home');
    }

}
