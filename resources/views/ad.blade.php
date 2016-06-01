@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Place an ad</div>
                    <div class="panel-body">

                        <div class="form-horizontal">
                            {!! Form::open(array('url' => '/ad', 'method' => 'POST', 'files' => true)) !!}

                            <div class="form-group">
                                {!! Form::label('product_name', 'Title of your ad', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-md-6">
                                    {!! Form::text('product_name', null, ['required', 'class' => 'form-control']) !!}
                                        @if ($errors->has('product_name'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('product_name') }}</strong>
                                            </span>
                                        @endif
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('product_desc', 'Provide your ad with a short description', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-md-6">
                                    {!! Form::textarea('product_desc', null, ['required', 'class' => 'form-control', 'style' => 'height:2in']) !!}
                                        @if ($errors->has('product_desc'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('product_desc') }}</strong>
                                            </span>
                                        @endif
                                </div>
                            </div>


                            <div class="form-group">
                                {!! Form::label('category_id', 'Select a category suitable for your ad', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-md-6">
                                    {!! Form::select('category_id', $categories, null, ['required', 'class' => 'form-control']) !!}
                                        @if ($errors->has('category_id'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('category_id') }}</strong>
                                            </span>
                                        @endif
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('city', 'City', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-md-6">
                                    {!! Form::text('city', null, ['required', 'class' => 'form-control']) !!}
                                        @if ($errors->has('city'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('city') }}</strong>
                                            </span>
                                        @endif
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('price', 'Price', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-md-6">
                                    {!! Form::number('price', null, ['required', 'class' => 'form-control']) !!}
                                        @if ($errors->has('price'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('price') }}</strong>
                                            </span>
                                        @endif
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('image', 'Select (preferably multiple) photos of the item you want to put up for sale', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-md-6">
                                    {!! Form::file('image', null, ['required', 'class' => 'form-control', 'placeholder' => 'select category']) !!}
                                        @if ($errors->has('image'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('image') }}</strong>
                                            </span>
                                        @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    {!! Form::submit('Place Ad', null, ['class' => 'btn btn-primary']) !!}
                                </div>
                            </div>

                            {!! Form::close() !!}
                        </div>
                        {{--<form class="form-horizontal" role="form" method="POST" action="{{ url('/ad') }}">--}}
                            {{--{!! csrf_field() !!}--}}

                            {{--<div class="form-group{{ $errors->has('product_name') ? ' has-error' : '' }}">--}}
                                {{--<label class="col-md-4 control-label">Title of your ad</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input type="text" class="form-control" name="product_name">--}}

                                    {{--@if ($errors->has('product_name'))--}}
                                        {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('product_name') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">--}}
                                {{--<label class="col-md-4 control-label">Pick a category</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input type="text" class="form-control" name="category_id">--}}


                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group{{ $errors->has('product_desc') ? ' has-error' : '' }}">--}}
                                {{--<label class="col-md-4 control-label">Provide your ad with a detailed description</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input type="text" class="form-control" name="product_desc" style="height: 2in">--}}


                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">--}}
                                {{--<label class="col-md-4 control-label">The amount of money you want to sell your product(s) for</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input type="number" class="form-control" name="price">--}}


                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">--}}

                                {{--<label class="col-md-4 control-label">City</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input type="text" class="form-control" name="city" value="{{ old('city') }}">--}}


                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">--}}
                                    {{--<label class="col-md-4 control-label">Photos</label>--}}

                                    {{--<div class="col-md-6">--}}
                                        {{--<input type="file" class="form-control" name="image">--}}


                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="form-group">--}}
                                    {{--<div class="col-md-6 col-md-offset-4">--}}
                                        {{--<button type="submit" class="btn btn-primary">--}}
                                            {{--<i class="fa fa-btn fa-user"></i>Place ad--}}
                                        {{--</button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                        {{--</form>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
