@extends('layouts.app')

@section('content')

<?php

        $session_id = Auth::User();

        echo '<div id="accountInfo">';
        echo $session_id['name'];
        echo $session_id['username'];
        echo $session_id['email'];
        echo $session_id['password'];

        echo '</div>';


?>
@endsection
