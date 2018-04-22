@extends('layout1')

@section('content')


@if(Session::has('success'))

<div class="row">
  <div class="col-md-12">
    <div class"alert alert-success"></div>

</div>{{Session::get('success')}}
</div>

@endif
 <h2>User Appointment</h2>
 <hr>
<form action="events.php" method="post" style="margin-left:150px;width:400px;">
            <div align="center" class="box-body">
              <input class="form-control" type="text" id="details" name="details" required="" placeholder="Name">
              <br>
			  <div class="form-group">
                       <input type="text" id="schdule" class="form-control"  name="schdule" required="" rows="3" placeholder="Detail">
                </div>
				
             <input type="text" class="form-control"  id="doctor_id" name="doctor_id" required=""placeholder="Doctor Name">
              			 	<br>
					  <div align="center" class="form-group">
				<button type="submit" name="app1_btn" class="btn btn-success">Apointment</button>
				<br>
            </div>
			 </div>
			
			</form>
  @endsection