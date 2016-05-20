@extends('layouts.app')

@section('content')

<?php

        $users = DB::select('SELECT * FROM users WHERE id = :id', ['id' => 2]);
        foreach ($users as $user){
                echo $user->username;
                echo $user->name;
                echo $user->email;
        }
?>

@endsection
