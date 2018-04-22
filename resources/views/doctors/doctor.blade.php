@extends('layouts.app')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="{{ asset('/js/jquery.tabledit.min.js') }}"></script>
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

List Of Doctors
                </div>



    <div class="col-md-8">

                

	<?php
$connect = mysqli_connect("localhost", "root", "", "data_user");
$query = "SELECT * FROM appointments_users ORDER BY id DESC";
$result = mysqli_query($connect, $query);
?>	
<table id="editable_table" class="table table-bordered table-striped">

     <thead>
      <tr>
       <th>ID</th>
       <th>Name</th>
       <th>Schedule</th>
	    <th>Doctor ID</th>      
          

      </tr>
     </thead>
     <tbody>
    
   
 <?php
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>
       <td>'.$row["id"].'</td>
       <td>'.$row["detail"].'</td>
       <td>'.$row["schdule"].'</td>
	   <td>'.$row["doctor_id"].'</td>
	     </tr>
			
      ';
     }
     ?>
     </tbody>
    </table>

            </div>

            </div>
        </div>
    </div>
</div>
@endsection
 <script>  
( function($) {
$(document).ready(function(){  
     $('#editable_table').Tabledit({
 url:'doctor.php',
      columns:{
       identifier:[0, "id"],
       editable:[[1, 'detail'], [2, 'schdule'], [3, 'doctor_id']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       if(data.action == 'delete')
      {
        $('#'+data.id).remove();
    location.reload();
       }
      }
     });
   
 
});  
} ) ( jQuery );

 </script>  