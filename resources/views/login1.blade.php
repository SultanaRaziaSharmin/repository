
  @extends('layout1')

@section('content')
  <h2>User Login</h2>
  <hr>
  <form action="login1_check" method="post">
   <input type="hidden" name="_token" value="{{csrf_token()}}">
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
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
 @endsection