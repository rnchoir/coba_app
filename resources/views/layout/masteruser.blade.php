<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{url('img/fav.png')}}">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
			CSS
			============================================= -->
    <link rel="stylesheet" href="{{url('css/linearicons.css')}}">
    <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{url('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('css/main.css')}}">
</head>

<body>

    <header id="header" id="home">
        <div class="container header-top">
            <div class="row">
                <div class="col-6 top-head-left">
                </div>
                <div class="col-6 top-head-right">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" style="color:#4CAF50; font-weight:bold;"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" style="color:#4CAF50; font-weight:bold;"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble" style="color:#4CAF50; font-weight:bold;"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance" style="color:#4CAF50; font-weight:bold;"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr style="color:#4CAF50;">
        <div class="container">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <h2 style="color:#4CAF50;">INFO FILM</h2>
                </div>
                <nav id="nav-menu-container">
                
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="/" style="color:#4CAF50; font-weight:bold;">Home </a> </li>
                        <li><a href="/about" style="color:#4CAF50; font-weight:bold;">About</a></li>
                        <li class="menu-has-children"><a href="" style="color:#4CAF50; font-weight:bold;">Kategori</a>
                            <ul>
                                <li><a href="/action" style="color:#4CAF50; font-weight:bold;">Action</a></li>
                                <li><a href="/comedy" style="color:#4CAF50; font-weight:bold;">Comedy</a></li>
                                <li><a href="/romance" style="color:#4CAF50; font-weight:bold;">Romance</a></li>
                            </ul>
                        </li>
                        <li class="menu-has-children"><a href="" style="color:#4CAF50; font-weight:bold;">Reting</a>
                            <ul>
                                <li><a href="/100" style="color:#4CAF50; font-weight:bold;">100% - 91%</a></li>
                                <li><a href="/90" style="color:#4CAF50; font-weight:bold;">90% - 81%</a></li>
                                <li><a href="/80" style="color:#4CAF50; font-weight:bold;">80% - 71%</a></li>
                            </ul>
                        </li>
                        <li><a href="/pesanan" style="color:#4CAF50; font-weight:bold;">Pesanan</a></li>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header><!-- #header -->


    <!-- start banner Area -->
    <section class="" id="home">
        @yield('banner')
    </section>
    <!-- End banner Area -->
    <!-- Start blog Area -->
    <section class="blog-area section-gap" id="blog">
        <div class="container">

            @yield('content')

        </div>
    </section>
    <!-- End blog Area -->
    <!-- start footer Area -->
    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>About Us</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
                        </p>
                        <p class="footer-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
                <div class="col-lg-5  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Newsletter</h6>
                        <p>Stay update with our latest</p>
                        <div class="" id="mc_embed_signup">
                            <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
                                <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
                                <button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                </div>

                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                    <div class="single-footer-widget">
                        <h6>Follow Us</h6>
                        <p>Let us be social</p>
                        <div class="footer-social d-flex align-items-center">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->

    <script src="{{url('js/vendor/jquery-2.2.4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{url('js/vendor/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="{{url('js/easing.min.js')}}"></script>
    <script src="{{url('js/hoverIntent.js')}}"></script>
    <script src="{{url('js/superfish.min.js')}}"></script>
    <script src="{{url('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{url('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{url('js/owl.carousel.min.js')}}"></script>
    <script src="{{url('js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{url('js/justified.min.js')}}"></script>
    <script src="{{url('js/jquery.sticky.js')}}"></script>
    <script src="{{url('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{url('js/parallax.min.js')}}"></script>
    <script src="{{url('js/mail-script.js')}}"></script>
    <script src="{{url('js/main.js')}}"></script>
</body>

</html>