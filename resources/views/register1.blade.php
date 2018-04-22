 
@extends('layout1')

@section('content')


@if(Session::has('success'))

<div class="row">
  <div class="col-md-12">
    <div class"alert alert-success"></div>

</div>{{Session::get('success')}}
</div>

@endif
 <h2>User Registration</h2>
 <hr>
  <form action="register1_action" method="post">
   <input type="hidden" name="_token" value="{{csrf_token()}}">


    <div class="form-group">
      <label for="name">Name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter name" name="name" >
@if($errors->has('name')) <p>{{ $errors->first('email')}}</p> @endif


    </div>
     <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      @if($errors->has('email')) <p>{{ $errors->first('email')}}</p> @endif
    </div>
     <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
      @if($errors->has('password')) <p>{{ $errors->first('email')}}</p> @endif
    </div>
    <div class="form-group">
      <label for="pwd"> Confirm Password:</label>
      <input type="password" class="form-control" id="cpwd" placeholder="Enter Confirm password" name="cpassword"> 
      @if($errors->has('cpassword')) <p>{{ $errors->first('email')}}</p> @endif
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  @endsection