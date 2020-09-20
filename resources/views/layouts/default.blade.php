<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./node_modules/fontawesome-free/css/all.css">
    @yield('head')
    <title><?= isset($title) ? $title : "Ocean of Knowledge" ?></title>
</head>

<body>
    <header>
        <nav id="navbar" class="stroke">
            <a class="logo" href="<?= url('/')?>"><span class="dancing d-none" id="logo-lg">Ocean of Knowledge</span><span id="logo-sm" class="dancing">Oceanok</span></a>
            <ul id="nav" class="nav hide">
                <li class="nav-item"><a class="nav-link <?= ($page === 'home') ? "active" : "" ?>" href="{{url('/')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link <?= ($page === 'blog') ? "active" : "" ?>" href="<?= url("/blog")?>">Blog</a></li>
                <li class="nav-item"><a class="nav-link <?= ($page === 'portfolio') ? "active" : "" ?>" href="{{url('/portfolio')}}">portfolio</a></li>
                <li class="nav-item"><a class="nav-link <?= ($page === 'tutorials') ? "active" : "" ?>" href="{{url('/tutorials')}}">Tutorials</a></li>
                <li class="nav-item"><a class="nav-link <?= ($page === 'services') ? "active" : "" ?>" href="{{url('/services')}}">Services</a></li>
                <li class="nav-item"><a class="nav-link <?= ($page === 'about') ? "active" : "" ?>" href="{{url('/about')}}">About</a></li>
                <li class="nav-item"><a class="nav-link <?= ($page === 'contact') ? "active" : "" ?>" href="{{url('/contact')}}">Contact</a></li>
            </ul>
            <button id="toggle-menu" class="toggle-menu"><i class="fas fa-bars"></i><i class="fas d-none fa-times"></i></button>
        </nav>
    </header>


    <div id="main">
        @if ($page !== 'home')
            <div class="title">
                <h1><?= isset($title) ? $title : "Ocean of Knowledge"?></h1>
            </div>
        @endif

        @if (session('fail'))
            <div class="alert-danger">
                <p>{{session('fail')}}</p>
                <span class="close-alert"><i class="fas fa-times"></i></span>
            </div>
        @endif

        @if (session('success'))
            <div class="alert-success">
                <p>{{session('success')}}</p>
                <span class="close-alert"><i class="fas fa-times"></i></span>
            </div>
        @endif
        <main>
            @yield('content')
        </main>
    </div>

    <footer>
        <div class="footer">
            <div>
                <h2><a class="dancing footer-logo" href="/">Ocean of Knowledge</a></h2>
                <p>
                    Ocean of Knowledge is a multifunction website, it offers services like website conception, building and design. <br> Ocean of knowledge contains also a blog and a tutorial page, where you can learn about intresting technologies.
                    <br>
                    <p class="dancing">Owned by Bislem</p>
                </p>
                <div class="footer-socials">
                    <span><a class="footer-social" target="blank" href="https://www.youtube.com/channel/UC4Nr45KQzhV5OAx-JrMV1uA"><i class="fab fa-youtube"></i></a></span>
                    <span><a class="footer-social" target="blank" href="https://chettout-abdeslam.blogspot.com"><i class="fab fa-blogger"></i></a></span>
                    <span><a class="footer-social" target="blank" href="https://www.github.com/bislem"><i class="fab fa-github"></i></a></span>
                    <span><a class="footer-social" target="blank" href="https://twitter.com/oceanofknowled6"><i class="fab fa-twitter"></i></a></span>
                    <span><a class="footer-social" target="blank" href="https://www.facebook.com/loup1999"><i class="fab fa-facebook"></i></a></span>
                </div>
            </div>
            <div>
                <h2 class="dancing">Short links</h2>
                <ul class="footer-shortlinks">
                    <li><a class="btn btn-sm primary active" href="{{url('/')}}">Home</a></li>
                    <li><a class="btn btn-sm primary" href="{{url('/blog')}}">Blog</a></li>
                    <li><a class="btn btn-sm primary" href="{{url('/portfolio')}}">portfolio</a></li>
                    <li><a class="btn btn-sm primary" href="{{url('tutorials')}}">Tutorials</a></li>
                    <li><a class="btn btn-sm primary" href="{{url('services')}}">Services</a></li>
                    <li><a class="btn btn-sm primary" href="{{url('/about')}}">About</a></li>
                    <li><a class="btn btn-sm primary" href="{{url('/contact')}}">Contact</a></li>
                </ul>
                <div class="searchbox">
                    <input type="text" placeholder="Search">
                    <button><i class="fas fa-search"></i></button>
                </div>
            </div>
            <div class="footer-contact">
                <h2 class="dancing">Contacts</h2>
                <div>
                    <div class="tooltip">
                        <div class="copy"><i class="fas fa-phone"></i>+2130664768495 |
                            <span class="tooltiptext">click to copy</span>
                        </div>
                        <input class="Text_to_copy" type="text" style="position: absolute;opacity: 0;pointer-events: none;" value="+2130664768495">
                    </div>
                    <a href="tel:+213664768495" title="click to call me">Call me</a>
                </div>

                <div>
                    <div class="tooltip">
                        <div class="copy"><i class="fas fa-envelope"></i>chettoutabdeslam@gmail.com |
                            <span class="tooltiptext">click to copy</span>
                        </div>
                        <input class="Text_to_copy" type="text" value="chettoutabdeslam@gmail.com">
                    </div>
                    <a href="mailto:chettoutabdeslam@gmail.com" title="click to mail me" target="_blank" rel="noopener noreferrer">Mail me</a>
                </div>

                <a href="http://www.facebook.com/t/messages/loup1999" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook"></i>Facebook</a>
                <a href="http://github.com/bislem" target="_blank" rel="noopener noreferrer"><i class="fab fa-github"></i>Github</a>
                <div style="margin-top: 40px;font-size: 30px;">
                    <p class="dancing">Made with &#x2661; by
                        <a href="http://www.github.com/bislem" style="font-size: 30px;" class="dancing" target="_blank" rel="noopener noreferrer">Bislem</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="copyright">
            All rights reserved &copy; 2020
        </div>
    </footer>
    <script></script>
    <script src="js/main.js"></script>
    @yield('foot')

</body>

</html>