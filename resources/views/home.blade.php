@extends('layouts.app')
@section('stylesheets')

@endsection

@section('title', 'This is a title')

@section('content')
    <div class="main-image">
        <div class="p-t-md">
            <figure class="image home-picture">
                <img class="is-rounded" src="{{ URL::asset('/images/JasonWOMS.jpg') }}">
            </figure>
        </div>
        <div class="white-text home-title m-t-xs">
            Software Developer, Data Scientist, Tech Enthusiast
        </div>
    </div>
@endsection