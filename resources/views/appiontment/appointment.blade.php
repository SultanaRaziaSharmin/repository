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
