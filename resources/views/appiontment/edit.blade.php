@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> Add Schedule</div>
<div class="row">
    
    @if(count($errors) > 0)
            @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}
            </div>
            @endforeach
            @endif
            @if(session('response'))
            <div class="alert alert-success">
            {{session ('response')}}</div>
            @endif
 <?php
$connect = mysqli_connect("localhost", "root", "", "data_user");
$query = "SELECT * FROM appointments_users ORDER BY id DESC";
$result = mysqli_query($connect, $query);
?>				


<?php  
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'data_user');

    $input = filter_input_array(INPUT_POST);
    $name=mysqli_real_escape_string($connect,$_POST['name']);
    $schdule=mysqli_real_escape_string($connect,$_POST['schdule']);
    $doctor_id=mysqli_real_escape_string($connect,$_POST['doctor_id']);
 

if($input["action"] === 'edit')
{
 $query = "
 UPDATE appointments_users
 SET
 name = '".$name."' , 
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

            <div align="center" class="box-header with-border">
              <h3 class="box-title">Add Schedule</h3>
            </div>
			<form action="events.php" method="post" style="margin-left:150px;width:400px;">
            <div align="center" class="box-body">
              <input class="form-control" type="text" id="details" name="details" required="" placeholder="Name">
              <br>
			  <div class="form-group">
                       <input type="text" id="schdule" class="form-control"  name="schdule" required="" rows="3" placeholder="Shedule">
                </div>
				
             <input type="text" class="form-control"  id="doctor_id" name="doctor_id" required=""placeholder="Doctor Id">
              			 	<br>
					  <div align="center" class="form-group">
				<button type="submit" name="app_btn" class="btn btn-success">Add Schedule</button>
				<br>
            </div>
			 </div>
			
			</form>
            <!-- /.box-body -->
          </div>




</div>

                <div class="panel-body">
                  

                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
