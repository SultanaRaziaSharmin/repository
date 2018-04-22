<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Input;
Use Validator;
Use Redirect;
Use App\Appointment_user;
use Auth;

class Appointment_userController extends Controller
{
   

public function appli(){
$data=Input::except(array('_token'));
//var_dump($data);
$rule=array(
'name'=>'required',
'detail'=>'required',
'schedule'=>'required',
'doctor'=>'required'
);
//$message=array(
//'cpassword.required'=>'the confirm password is required',

//'cpassword.min'=>'the confirm password is must be 6 char required',
//'cpassword.same'=>'the confirm password is same'

//);

$validator=Validator::make($data,$rule);
if ($validator->fails()){

	return Redirect::to('appointment_user')->withErrors($validator);
}
else{

	//Appointment_user::formstore(Input::except(array('_token')));


	return Redirect::to('appointment_user')->with('success','successfully Registered');
}

}

}