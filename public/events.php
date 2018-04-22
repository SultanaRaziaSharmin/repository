                        <?php

$dbc=mysqli_connect("localhost","root","","data_user");
if(isset($_POST['app_btn']))
{   $title=mysqli_real_escape_string($dbc,$_POST['details']);
    $body=mysqli_real_escape_string($dbc,$_POST['schdule']);
      $doctor=mysqli_real_escape_string($dbc,$_POST['doctor_id']);
   
            $sql="INSERT INTO appointments_users(detail,schdule,doctor_id) VALUES('$title','$body','$doctor')";
              mysqli_query($dbc,$sql);  
          header("Location: http://localhost:8000/appointment");
die();
  
}
if(isset($_POST['app1_btn']))
{   $title=mysqli_real_escape_string($dbc,$_POST['details']);
    $body=mysqli_real_escape_string($dbc,$_POST['schdule']);
      $doctor=mysqli_real_escape_string($dbc,$_POST['doctor_id']);
   
            $sql="INSERT INTO appointment1_users(detail,schdule,doctor_id) VALUES('$title','$body','$doctor')";
              mysqli_query($dbc,$sql);  
          header("Location: http://localhost:8000/appointment_user");
die();
  
}

?>