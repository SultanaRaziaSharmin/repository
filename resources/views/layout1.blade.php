<!DOCTYPE html>
<html lang="en">
<head>
  <title>user_login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{URL::to('/home1')}}">Health Care</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{URL::to('/')}}">Home</a></li>
@if(Auth::user())

      


      
         <li class="active"><a href="{{URL::to('/appointment_user')}}">appointment</a></li>
    </ul>
   
    <ul class="nav navbar-nav navbar-right">
        <li><a href="{{URL::to('/logout')}}">
          <span  style="color:white">{{ucwords(Auth::user()->name)}}</span><span class="glyphicon glyphicon-log-in"></span>logout</a></li>
        @else
      <li><a href="{{URL::to('/register1')}}"><span class="glyphicon glyphicon-user"></span>User Sign Up</a></li>
      <li><a href="{{URL::to('/signin')}}"><span class="glyphicon glyphicon-log-in"></span> UserLogin</a></li>
 @endif
    </ul>
  </div>
</nav>
  

<div class="container">
 @yield('content')
</div>

</body>
</html>

</body>
</html>

