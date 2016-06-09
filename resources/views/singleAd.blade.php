@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>{{ $ad->product_name }}</h4></div>

                    <div class="panel-body">

                        <div>
                            <p>{{ $ad->product_desc }}</p>
                            <p>${{ $ad->price }}</p>
                            <img src="/dbEntries/adImages/{{ $ad->image}}" alt="Product Image" height="300">
                        </div>

                    </div>
                </div>
                <div class="panel panel-default">
                <div class="panel-body">
                     {!! Form::open(array('url' => '/ad/postComment', 'method' => 'POST')) !!}
                     {!! csrf_field() !!}
                     <input type="hidden" name="adId"  value="{{ $ad->id }}">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Comment</label>

                            <div class="col-md-6">
                                {{ Form::text('content', null, ['name' => 'content']) }}

                                @if ($errors->has('content'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    {!! Form::submit('Place Comment', null, ['class' => 'btn btn-primary']) !!}
                                </div>
                            </div>

                    {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection