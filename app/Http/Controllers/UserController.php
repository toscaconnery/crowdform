<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\USer;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;



class UserController extends Controller
{
    //
    public function registerUser(Request $request){

    	$file = $request->file('user_photo');

    	$destination = public_path('uploads');
    	$file->move($destination, $file->getClientOriginalName());
    	$user_photo = 'uploads/' . $file->getClientOriginalName();
    	// dd($user_photo);
    	$user = new User();
    	$user->first_name = $request->first_name;
    	$user->email = $request->email;
    	$user->password = bcrypt($request->password);
    	$user->last_name = $request->last_name;
    	$user->user_photo = $user_photo;
    	$user->type_id = $request->type_id;
    	$user->phone_number = $request->phone_number;
    	
    	// dd($user);
    	$user->save();
		
		return view('beranda');


    }

    public function login(Request $request){

    	$email = $request->email;
    	$password = $request->password;

    	$query = User::where('email', $email)
    					->where('password', $password)
    					->first();


    	if($query){
    		$user = Auth::loginUsingId($email, true);
    		return "sukses";
    	}else{
    		return "gagal";
    	}
    }


}
