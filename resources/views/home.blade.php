@extends('layouts.default')

@section('content')
    <div class="site">

        <div class="slider">

            <div class="slick-slide">
                <img src="./images/sgcdesignco-NIo8Fd-RngE-unsplash.jpg">
                <div class="slide-content">
                    <h1 style="font-size: 50px;font-weight: 400;">Love reading ? feel bored ?</h1>
                    <h2 style="font-size: 35px;font-weight: 400;">Checkout my Blog</h2>
                    <ul>
                        <li>You will find articles about the latest technologies.</li>
                        <li>Discover new tricks to improve your life and get better at programing.</li>
                        <li>And more...</li>
                    </ul>
                    <div class="cta">
                        <a href="{{url('/blog')}}" class="btn btn-sm primary">Blog</a>
                    </div>
                </div>
            </div>


            <div class="slick-slide">
                <img src="./images/riku-lu-wvJuYrM5iuw-unsplash.jpg">
                <div class="slide-content">
                    <h1 style="font-size: 50px;font-weight: 400;">Interested in web technologies ? want to learn ? get better ?</h1>
                    <h2 style="font-size: 35px;font-weight: 400;">Checkout my Tutorials</h2>
                    <ul>
                        <li>Discover the latest technologies.</li>
                        <li>Learn to code better.</li>
                        <li>Improve your skill set.</li>
                        <li>Learn to do things from scratch.</li>
                    </ul>
                    <div class="cta">
                        <a href="{{url('/tutorials')}}" class="btn btn-sm primary">Tutorials</a>
                    </div>
                </div>
            </div>

            <div class="slick-slide">
                <img src="./images/scott-graham-5fNmWej4tAA-unsplash.jpg">
                <div class="slide-content">
                    <h1 style="font-size: 50px;font-weight: 400;">Want to build a website ? customize or fix a bug ?</h1>
                    <h2 class="" style="font-size: 35px;font-weight: 400;">Checkout my Services</h2>

                    <ul>
                        <li>
                            I build websites using the latest technologies.
                            <ul>
                                <li>PHP | Laravel | micro-frameworks.</li>
                                <li>Python | flask</li>
                                <li>NodeJs | Express</li>
                            </ul>
                        </li>
                        <li>I design simple web applications.
                            <ul>
                                <li>Html5, CSS3</li>
                                <li>Ajax</li>
                                <li>React</li>
                                <li>JavaScript</li>
                                <li>Bootstrap</li>
                            </ul>
                        </li>
                        <li>
                            I can turn your website into a desktop application, or just build one from scratch.
                            <ul>
                                <li>JavaScript, CSS3, Html5</li>
                                <li>Electron</li>
                                <li>Python</li>
                            </ul>
                        </li>
                    </ul>
                    <div class="cta">
                        <a href="{{url('/services')}}" class="btn btn-sm primary">Services</a>
                    </div>
                </div>
            </div>

        </div>

    </div>



    <div class="me">
        <div class="text">
            <h1 class="dancing" style="font-weight: 400;">Hi, my name is Abdeslam <br>I build websites and desktop applications.</h1>
        </div>
    </div>

    <div class="wrap">
        <div class="presentation">

            <div class="artboard">
                <div class="card">

                    <div class="card__side card__side--back">
                        <div class="card__cover" style="background-image: linear-gradient(to top right, rgba(11, 26, 54, 0.65), rgba(55, 202, 141, 0.7)), url(./assets/camila-waz-2l5U8g4f8hQ-unsplash.jpg);">
                            <h4 class="card__heading">
                                <span class="card__heading-span">Skill Set</span>
                            </h4>
                        </div>
                        <div class="card__details">
                            <ul>
                                <li><i class="fab fa-html5"></i> HTML & <i class="fab fa-css3-alt"></i> CSS</li>
                                <li><i class="fab fa-js-square"></i> JS | Ajax </li>
                                <li><i class="fab fa-react"></i> React</li>
                                <li><i class="fab fa-bootstrap"></i> Bootstrap</li>

                            </ul>
                        </div>
                        <div class="cta">
                            <a href="{{url('/services')}}" target="blank" class="btn btn-sm primary">Services</a>
                            <a href="{{url('/portfolio')}}" target="blank" class="btn btn-sm primary">Portfolio</a>
                        </div>
                    </div>

                    <div class="card__side card__side--front" style="background-image: linear-gradient(to right bottom, rgba(11, 26, 54, 0.65), rgba(55, 202, 141, 0.7)), url(./assets/camila-waz-2l5U8g4f8hQ-unsplash.jpg);">
                        <div class="card__theme">
                            <div class="card__theme-box">
                                <p class="card__subject">Web Developer</p>
                                <p class="card__title">Front-end</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="artboard">
                <div class="card">

                    <div class="card__side card__side--back">
                        <div class="card__cover" style=" background-image: linear-gradient(to top right, rgba(11, 26, 54, 0.65), rgba(55, 202, 141, 0.7)), url(./assets/g.png);">
                            <h4 class="card__heading">
                                <span class="card__heading-span">Skill Set</span>
                            </h4>
                        </div>
                        <div class="card__details">
                            <ul>
                                <li><i class="fab fa-php"></i> PHP | <i class="fab fa-laravel"></i> Laravel</li>
                                <li><i class="fab fa-python"></i> Python | Flask</li>
                                <li><i class="fab fa-node"></i> NodeJs | ExpressJs</li>
                                <li><i class="fas fa-database"></i> Database Conception</li>
                            </ul>
                        </div>
                        <div class="cta">
                            <a href="{{url('/services')}}" target="blank" class="btn btn-sm primary">Services</a>
                            <a href="{{url('/portfolio')}}" target="blank" class="btn btn-sm primary">Portfolio</a>
                        </div>
                    </div>

                    <div class="card__side card__side--front" style="background-image: linear-gradient(to right bottom, rgba(11, 26, 54, 0.65), rgba(55, 202, 141, 0.7)), url(./assets/markus-spiske-466ENaLuhLY-unsplash.jpg);">
                        <div class="card__theme">
                            <div class="card__theme-box">
                                <p class="card__subject">Web Developer</p>
                                <p class="card__title">Back-end</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="artboard">
                <div class="card">

                    <div class="card__side card__side--back">
                        <div class="card__cover" style=" background-image: linear-gradient(to top right, rgba(11, 26, 54, 0.65), rgba(55, 202, 141, 0.7)), url(./assets/g.png);">
                            <h4 class="card__heading">
                                <span class="card__heading-span">Skill Set</span>
                            </h4>
                        </div>
                        <div class="card__details">
                            <ul>
                                <li><i class="fab fa-node"></i> NodeJs | Electron</li>
                                <li><i class="fab fa-html5"></i> HTML & <i class="fab fa-css3-alt"></i> CSS</li>
                                <li><i class="fab fa-python"></i> Python</li>
                            </ul>
                        </div>
                        <div class="cta">
                            <a href="{{url('/services')}}" target="blank" class="btn btn-sm primary">Services</a>
                            <a href="{{url('/portfolio')}}" target="blank" class="btn btn-sm primary">Portfolio</a>
                        </div>
                    </div>

                    <div class="card__side card__side--front" style="background-image: linear-gradient(to right bottom, rgba(11, 26, 54, 0.65), rgba(55, 202, 141, 0.7)), url(./assets/howard-bouchevereau-RSCirJ70NDM-unsplash.jpg);">
                        <div class="card__theme">
                            <div class="card__theme-box">
                                <p class="card__subject">Desktop developer</p>
                                <p class="card__title">Desktop Apps</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('head')
    <link rel="stylesheet" type="text/css" href="./css/home.css">
    <link rel="stylesheet" type="text/css" href="./node_modules/slick-carousel/slick/slick.css" />
@endsection

@section('foot')
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="./node_modules/slick-carousel/slick/slick.min.js"></script>
    <script src="./js/home.js"></script>
@endsection