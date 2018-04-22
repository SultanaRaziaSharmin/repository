                      <?php  
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'data_user');

$input = filter_input_array(INPUT_POST);

$title = mysqli_real_escape_string($connect, $input["detail"]);
$body = mysqli_real_escape_string($connect, $input["schdule"]);
$did = mysqli_real_escape_string($connect, $input["doctor_id"]);
if($input["action"] === 'edit')
{
 $query = "
 UPDATE appointments_users 
 SET detail = '".$title."', 
 schdule = '".$body."' , 
 doctor_id = '".$did."' 
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

    