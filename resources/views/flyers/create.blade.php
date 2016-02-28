@extends('layout')

@section('content')
    <h1>Selling your home?</h1>
    <hr>
    <div class="row">
        {{ Form::open(['method' => 'POST', 'route' => 'flyers.store', 'enctype' => 'multipart/form-data', 'class' => 'col-md-6 col-md-offset-3']) }}
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @include('flyers.form')
        {{ Form::close() }}
    </div>
@stop