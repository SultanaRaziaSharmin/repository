<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Input;
Use Validator;
Use Redirect;
Use App\Register1;
use Auth;
class Register1Controller extends Controller
{
public function store(){
$data=Input::except(array('_token'));
//var_dump($data);
$rule=array(
'name'=>'required',
'email'=>'required|email',
'password'=>'required|min:6',
'cpassword'=>'required|same:password'
);
$message=array(
'cpassword.required'=>'the confirm password is required',

'cpassword.min'=>'the confirm password is must be 6 char required',
'cpassword.same'=>'the confirm password is same'

);

$validator=Validator::make($data,$rule,$message);
if ($validator->fails()){

	return Redirect::to('register1')->withErrors($validator);
}
else{

	Register1::formstore(Input::except(array('_token','cpassword')));


	return Redirect::to('register1')->with('success','successfully Registered');
}

}

public function login1(){

//echo "login";
	$data=Input::except(array('_token'));
//var_dump($data);
$rule=array(

'email'=>'required|email',
'password'=>'required'
);


$validator=Validator::make($data,$rule);
if ($validator->fails()){

	return Redirect::to('signin')->withErrors($validator);
}
else{

	$userdata=array(
'email'=>Input::get('email'),
'password'=>Input::get('password')

	);
		//$data=Input::except(array('_token'));
		if(Auth::attempt($userdata)){
echo"yes auth";
//return Redirect::to('home1');

		}else{
//return Redirect::to('signin');
echo"nnooooooooooo auth";

		}
//ar_dump($data);


}


}
}
