<?php  
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'data_user');

$input = filter_input_array(INPUT_POST);

    $id=mysqli_real_escape_string($connect,$_POST['id']);
        $user_id=mysqli_real_escape_string($connect,$_POST['user_id']);
    $detail=mysqli_real_escape_string($connect,$_POST['detail']);
    $schdule=mysqli_real_escape_string($connect,$_POST['schdule']);
    $doctor_id=mysqli_real_escape_string($connect,$_POST['doctor_id']);
 

if($input["action"] === 'edit')
{
 $query = "
 UPDATE appointments_users
 SET
 id='".$id."'
 detail = '".$detail."' , 
 schdule = '".$schdule."' , 
  doctor_id = '".$doctor_id."' ,
 WHERE id = '".$input["id"]."'
 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM appointments_users
 WHERE id = '".$input["id"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>