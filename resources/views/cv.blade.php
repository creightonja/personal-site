@extends('layouts.app')
@section('stylesheets')

@endsection

@section('title', 'This is a title')

@section('content')
    <iframe class="cv-iframe" src="{{ URL::asset('/files/CreightonCV18.pdf') }}">

    </iframe>
@endsection

