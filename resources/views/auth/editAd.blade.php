@extends('layouts.app')

@section('title')
Ad
@endsection

@section('content')

<?php

        $session_id = Auth::Ad();
?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Profile</div>
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
                                    {!! Form::submit('Edit Ad', null, ['class' => 'btn btn-primary']) !!}
                                </div>
                            </div>

                            {!! Form::close() !!}
				</div>
            </div>
        </div>
    </div>
</div>



@endsection
