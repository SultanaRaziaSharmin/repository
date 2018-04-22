
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
Profiles
                </div>

                  <div class="col-md-8">

                

       <?php
$connect = mysqli_connect("localhost", "root", "", "data_user");
$query = "SELECT * FROM users ORDER BY id DESC";
$result = mysqli_query($connect, $query);
?>  
 <table id="editable_table" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>ID</th>
       
       <th>User Name</th>
       <th>Email</th>
       <th>Edit</th>
       <th>Delete</th>
      </tr>
     </thead>
     <tbody>
    
   
 <?php
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>
       <td>'.$row["id"].'</td>
       <td>'.$row["name"].'</td>
       <td>'.$row["email"].'</td>
       
        <td><a href="#">edit</a>
</td>
         <td><a href="#">delete</a>
</td>
    
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
