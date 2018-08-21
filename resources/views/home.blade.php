@extends('layouts.app')
@section('stylesheets')

@endsection

@section('title', 'Personal Site for Jason Creighton')

@section('content')
    <section class="main-image">
        <div class="p-t-md">
            <figure class="image home-picture">
                <img class="is-rounded" src="{{ URL::asset('/images/JasonWOMS.jpg') }}">
            </figure>
        </div>
        <div class="white-text home-title m-t-xs">
            Software Developer, Data Scientist, Tech Enthusiast
        </div>
    </section>
    <section class="skills">
        <div class="skills-container">
            <h2>Software Specializations</h2>
            <div class="skill-container p-r-md">
                <div class="icon-container">
                    <span class="fa-stack fa-7x">
                        <i class="fa fa-circle fa-stack-2x icon-bg"></i>
                        <i class="fab fa-react fa-stack-1x icon-main"></i>
                    </span> 
                </div>
                <div class="skill-description">
                    <h3>Single Page Applications</h3>
                    <span>
                        Using React and Vue, I create engaging web applications that feel native and transition seemlessly.
                    </span>
                </div>
            </div>
            <div class="skill-container p-r-md">
                <div class="icon-container">
                    <span class="fa-stack fa-7x">
                        <i class="fa fa-circle fa-stack-2x icon-bg"></i>
                        <i class="fas fa-cogs fa-stack-1x icon-main"></i>
                    </span> 
                </div>
                <div class="skill-description">
                    <h3>APIs and Microservices</h3>
                    <span>
                        I build OAuth compliant microservices, with detailed messaging, and great documentation.
                    </span>
                </div>
            </div>
            <div class="skill-container">
                <div class="icon-container">
                <span class="fa-stack fa-7x">
                        <i class="fa fa-circle fa-stack-2x icon-bg"></i>
                        <i class="fas fa-cloud fa-stack-1x icon-main"></i>
                    </span> 
                </div>
                <div class="skill-description">
                    <h3>Cloud Based Applications</h3>
                    <span>
                        My services are hosted on cloud based platforms such as EC2 on AWS. (This site is hosted on Digital Ocean.)
                    </span>  
                </div>
            </div>
        </div>
    </section>
@endsection