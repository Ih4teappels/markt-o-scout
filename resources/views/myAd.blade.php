@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ Auth::User()->name }}'s ads</div>

                    <div class="panel-body adList">

                        @foreach($oneAd as $ad)
                        <div class="listAd">
                        <a href="../ad/{{ $ad->id }}">
                            <h2 class="adHeader">{{ $ad->product_name }}</h2>
                        </a>
                        <img class="adListImg" src="/dbEntries/adImages/{{ $ad->image}}" alt="Product Image" height="150" width="150">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection