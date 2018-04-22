





   @extends('layout1')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                       
                            {{ session('status') }}

                        </div>
                    @endif
<div class="panel-heading"> Thank You For Visit our Site If You Want An Appoitment Please Go To The Registration Section And Complete Registration And Get The Appointment :)  </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection