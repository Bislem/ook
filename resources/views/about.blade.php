@extends('layouts.default')

@section('content')
        
    <div class="main contacts">
        <div class="container">
            <h2>About Ocean of Knowlegde</h2>
            <p>
                Ocean of Knowledge is a multifunction website, it offers services like website conception, building and design, to know more about our services go check the services page! <br> Ocean of knowledge contains also a blog and a tutorial
                page, where you can learn about intresting technologies.
            </p>
            <h2>Owner of Ocean of Knowledge</h2>
            <p>This website is fully made by Abdeslam Chettout, and owned by him.</p>
            <div>
                <h2>About the owner</h2>
                Abdeslam Chettout is a full stack web developer, he made this website to offer his knowledge and services to the world ! <br> To know more about Abdeslam 
                <a href="http://chettout-abdeslam.blogspot.com" target="_blank" rel="noopener noreferrer" class="link">Click here</a>
            </div>
            <div>
                <h3>Have a feedback ?</h3>
                <p>send me a message <a href="{{url('/contact#Message')}}" class="link">From here</a></p>
                <p>Or mail me to : ChettoutAbdeslam@gmail.com</p>

            </div>
        </div>
    </div>
@endsection

@section('head')
    <link rel="stylesheet" href="css/about.css">
@endsection