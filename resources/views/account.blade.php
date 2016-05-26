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
					<form class="form-horizontal" role="form" method="GET" action="{{ url('/account/edit') }}">
						{!! csrf_field() !!}
						
						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Name</label>
<?php
    echo '<div id="accountName" class="col-md-6">' . $session_id['name'] . '</div>';
?>
                        @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
						</div>
						<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Username</label>
<?php
    echo '<div id="accountUsername" class="col-md-6">' . $session_id['username'] . '</div>';
?>
                        @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
						</div>
						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Email</label>

<?php      
    echo '<div id="accountEmail" class="col-md-6">' . $session_id['email'] . '</div>';
?>
                        @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
						</div>
                        <div class="form-group{{ $errors->has('residence') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Residence</label>
<?php      
    echo '<div id="accountResidence" class="col-md-6">' . $session_id['residence'] . '</div>';
?>
                        @if ($errors->has('residence'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('residence') }}</strong>
                                    </span>
                                @endif
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
