@extends('layout')

@section('content')
    <div class="jumbotron">
        <h1>Inmobilify</h1>
        <p>This is a template showcasing the optional theme stylesheet included in Bootstrap. Use it as a starting point to create something more unique by building on or modifying it.</p>
        <a href="{{ route('flyers.create') }}" class="btn btn-primary">Create a flyer</a>
    </div>
@stop