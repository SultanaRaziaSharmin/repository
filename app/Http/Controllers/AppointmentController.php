<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use Auth;
class AppointmentController extends Controller
{
   public function appointment(){

   return view('appiontment.appointment');
   }
   public function addappointment(Request $request){

$this->validate($request,[
     'detail'=>'required',
      'schdule'=>'required',
 'doctor_id'=>'required',
    	]);

$appointment=new Appointment;
//$appointment->user_id= Auth::user()->id  ;
$appointment->detail=$request->input('detail');
$appointment->schdule=$request->input('schdule');
$appointment->doctor_id=$request->input('doctor_id');

  //eturn Auth::user()->id ;
    

//exit();
  $appointment->save();
return redirect('/appointment')->
with('response','Appointment added sucessfully');
   }
}
