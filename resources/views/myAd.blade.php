@extends('layouts.app')

@section('content')
<<<<<<< HEAD
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">My ads</div>
=======
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">My ads</div>
>>>>>>> 2304ec06324e79044fd237b4d6b0477ab1723089

                    <div class="panel-body">

<<<<<<< HEAD
                        @foreach($oneAd as $ad)

                            {{ $ad->product_name }}

                        @endforeach
                    </div>
=======
                    @foreach($oneAd as $ad)

                    {{ $ad->product_name }}
                    
                    @endforeach
>>>>>>> 2304ec06324e79044fd237b4d6b0477ab1723089
                </div>
            </div>
        </div>
    </div>
@endsection