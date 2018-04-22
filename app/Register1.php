<?php

namespace App;
Use Input;
Use Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Register1 extends Authenticatable
{


//class Register1 extends Model
//{
protected $table="register1_users";


    public static function formstore($data){
//echo "here modle is";
//var_dump($data);

    	$name=Input::get('name');
    	//echo $name." ";
    	$email=Input::get('email');
        $pass=Hash::make(Input::get('password'));


$users=new Register1();

$users->name=$name;

$users->email=$email;

$users->password=$pass;

$users->save();
    }
}
