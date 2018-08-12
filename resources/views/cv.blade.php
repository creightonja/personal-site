@extends('layouts.app')
@section('stylesheets')

@endsection

@section('title', 'This is a title')

@section('content')
    <iframe onload="this.width=screen.width;this.height=screen.height;"

    
    src="{{ URL::asset('/files/CreightonCV18.pdf') }}">

    </iframe>
@endsection

