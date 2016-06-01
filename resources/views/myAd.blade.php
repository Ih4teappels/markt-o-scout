@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">My ads</div>

                    <div class="panel-body">

                        @foreach($oneAd as $ad)
                        <a href="singleAd/{{ $ad->id }}">
                            <div>
                                <h2>{{ $ad->product_name }}</h2>
                                <p>{{ $ad->product_desc }}</p>
                                <img src="/dbEntries/adImages/{{ $ad->image}}" alt="Product Image" height="300">
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection