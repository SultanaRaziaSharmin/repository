<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\file;
use Illuminate\Support\Facades\URL;
use App\Profile;
use Auth;


class ProfileController extends Controller
{
    

    public function profile(){

    	return view('profiles.profile');
    }
 
    public function addprofile(Request $request){
    	$this->validate($request,[
     'name'=>'required',
      'designation'=>'required',

    	]);
$profile = new Profile;
//$profile->user_id= Auth::user()  ;
$profile->name=$request->input('name');
$profile->designation=$request->input('designation');

    //$profile->save();
return redirect('/profile')->
with('response','profile added sucessfully');
  //return Auth::user() ;

}
}