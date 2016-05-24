@extends('layouts.app')

@section('title')
Account
@endsection

@section('content')

<?php

        $session_id = Auth::User();

        echo '<div id="accountInfo">';
        echo '<div id="accountName">' . $session_id['name'] . '</div>';
        echo '<div id="accountUsername">' . $session_id['username'] . '</div>';
        echo '<div id="accountEmail">' . $session_id['email'] . '</div>';

        echo '</div>';


?>
@endsection
