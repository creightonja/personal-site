@extends('layouts.app')
@section('stylesheets')

@endsection

@section('title', 'CV for Jason Creighton')

@section('content')
    <iframe class="cv-iframe" src="{{ URL::asset('/files/CreightonCV18.pdf') }}">

    </iframe>
@endsection

