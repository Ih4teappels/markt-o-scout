@extends('layouts.app')

@section('content')

<?php

        $session_id = Auth::User();

        echo $session_id['id'];

?>
@endsection
