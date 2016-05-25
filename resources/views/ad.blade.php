@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Place an ad</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/') }}">
                            {!! csrf_field() !!}

                            <div class="form-group{{ $errors->has('product_name') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Title of your ad</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="product_name">

                                    @if ($errors->has('product_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('product_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Pick a category</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="category_id">

                                    @if ($errors->has('category_id'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('category_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('product_desc') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Provide your ad with a detailed description</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="product_desc" style="height: 2in">

                                    @if ($errors->has('product_desc'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('product_desc') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">

                                <label class="col-md-4 control-label">City</label>

                            <div class="col-md-6">
                                <input type="city" class="form-control" name="city" value="{{ old('residence') }}">

                                @if ($errors->has('city'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                                        </div>
                                    </div>
                                <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">Photos</label>

                                    <div class="col-md-6">
                                        <input type="file" class="form-control" name="image">

                                        @if ($errors->has('image'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-btn fa-user"></i>Place ad
                                        </button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
