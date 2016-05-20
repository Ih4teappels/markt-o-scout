@extends('layouts.app')

@section('content')
<?php

        $results = DB::select('select * from users where name = :name', ['name' => 'Robin']);

                echo json_encode($results);
?>
@endsection
