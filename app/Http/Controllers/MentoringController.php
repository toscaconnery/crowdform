<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mentoring;
use App\Team;
use Illuminate\Support\Facades\DB;
use Auth;


class MentoringController extends Controller
{
    //
    public function setMentoring(Request $request){
        // dd($request->team_id);
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
        $mentoring->mentor_id = $request->mentor_id;
    	$mentoring->date = $request->date;
    	$mentoring->save();

    	if($request->type_id == 1){
            
    		$team = Team::where('team_id', $request->team_id)->get();
            
              
            if($team[0]->mentoring_count == null){
                $team[0]->mentoring_count = 1;

            }else{
                $team[0]->mentoring_count += 1;
            }
            // dd($team);  
            Team::where('team_id', $team[0]->team_id)
                    ->update(['mentoring_count' => $team[0]->mentoring_count]);
            
    	}
        
        // dd($mentoring);
        // 
        return back();
    }

    public function getMentoring(){
        if(Auth::check()) {
            $mentoring = DB::table('mentoring')
                        ->join('users', 'users.user_id', '=', 'mentoring.mentor_id')
                        ->join('team', 'team.team_id', '=', 'mentoring.team_id')
                        ->where('mentoring.filled_by', '=', Auth::user()->user_id)
                        ->get();

            // dd($mentoring);

            return view('dashboard.daftarbimbingan', ['mentoring' => $mentoring]);
        }
        return back();
    }

}
