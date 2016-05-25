@extends('layouts.app')

@section('title')
Account
@endsection

@section('content')

<?php

        $session_id = Auth::User();
?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Profile</div>
                <div class="panel-body">
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/editProfile') }}">
						{!! csrf_field() !!}
						
						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Name</label>
<?php

    echo '<div id="accountName" class="col-md-6"><input type="name" class="form-control" name="name" value="' . $session_id['name'] . '"></input></div>';
?>
						</div>
						<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Username</label>
<?php
    echo '<div id="accountUsername" class="col-md-6"><input type="username" class="form-control" name="username" value="' . $session_id['username'] . '"></input></div>';
?>

						</div>
						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Email</label>

<?php      
    echo '<div id="accountEmail" class="col-md-6"><input type="email" class="form-control" name="email" value="' . $session_id['email'] . '"></input></div>';

?>

						</div>
						<div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-edit"></i>Edit
                                </button>
                            </div>
                        </div>
					</form>
				</div>
            </div>
        </div>
    </div>
</div>



@endsection
