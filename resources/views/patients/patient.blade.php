@extends('layouts.app')

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

List Of Patients
                </div>

                  <div class="col-md-8">

                

       <?php
$connect = mysqli_connect("localhost", "root", "", "data_user");
$query = "SELECT * FROM appointment1_users ORDER BY id DESC";
$result = mysqli_query($connect, $query);
?>	
 <table id="editable_table" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>SL</th>
	   <th>ID</th>
       <th>Patient Name</th>
       <th>Details</th>
 
      </tr>
     </thead>
     <tbody>
    
   
 <?php
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>
       <td>'.$row["id"].'</td>
       <td>'.$row["doctor"].'</td>
       <td>'.$row["detail"].'</td>
	    <td>'.$row["name"].'</td>
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
@endsection
