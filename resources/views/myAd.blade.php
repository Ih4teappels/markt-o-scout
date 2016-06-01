@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">My ad's</div>

                <div class="panel-body">
                    On this page we show all the ad's you have placed
                    @foreach($ads as $ad)
                        <h2>{{!! $ad->product_name !!}}</h2>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
