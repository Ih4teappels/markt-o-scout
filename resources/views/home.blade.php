@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Home</div>

                <div class="panel-body">
                    @foreach($ads as $ad)

                        <h2>{{ $ad->product_name }}</h2>
                        <p>{{ $ad->product_desc }}</p>
                        <img src="/dbEntries/adImages/{{ $ad->image}}" alt="Product Image" height="300">

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
