<?php
use Illuminate\Support\Facades\Storage;
?>

<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.ico">
    <title>
        Praendi
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />

    @yield('scripts')

    <link rel="stylesheet" href="/assets/css/themify-icons.css">
    <link rel="stylesheet" href="/assets/css/slick.css">
    <link rel="stylesheet" href="/assets/css/nice-select.css">
    <style>
        .preloader{background-color:#f7f7f7;width:100%;height:100%;position:fixed;top:0;left:0;right:0;bottom:0;z-index:999999;-webkit-transition:.6s;-o-transition:.6s;transition:.6s;margin:0 auto}.preloader .preloader-circle{width:100px;height:100px;position:relative;border-style:solid;border-width:1px;border-top-color:#ff2143;border-bottom-color:transparent;border-left-color:transparent;border-right-color:transparent;z-index:10;border-radius:50%;-webkit-box-shadow:0 1px 5px 0 rgba(35,181,185,0.15);box-shadow:0 1px 5px 0 rgba(35,181,185,0.15);background-color:#ffffff;-webkit-animation:zoom 2000ms infinite ease;animation:zoom 2000ms infinite ease;-webkit-transition:.6s;-o-transition:.6s;transition:.6s}.preloader .preloader-circle2{border-top-color:#0078ff}.preloader .preloader-img{position:absolute;top:50%;z-index:200;left:0;right:0;margin:0 auto;text-align:center;display:inline-block;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%);padding-top:6px;-webkit-transition:.6s;-o-transition:.6s;transition:.6s}.preloader .preloader-img img{max-width:55px}.preloader .pere-text strong{font-weight:800;color:#dca73a;text-transform:uppercase}@-webkit-keyframes zoom{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg);-webkit-transition:.6s;-o-transition:.6s;transition:.6s}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg);-webkit-transition:.6s;-o-transition:.6s;transition:.6s}}@keyframes zoom{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg);-webkit-transition:.6s;-o-transition:.6s;transition:.6s}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg);-webkit-transition:.6s;-o-transition:.6s;transition:.6s}}
        .weekly2-news-area .weekly2-wrapper .slider-wrapper{background:#fff;padding:30px 22px 19px 23px;border-radius:10px}.weekly2-news-area .weekly2-wrapper .slider-wrapper .weekly2-single{margin-left:15px;margin-right:15px}.weekly2-news-area .weekly2-wrapper .slider-wrapper .weekly2-single .weekly2-img{margin-bottom:20px}.weekly2-news-area .weekly2-wrapper .slider-wrapper .weekly2-single .weekly2-img img{width:100%;border-radius:6px}.weekly2-news-area .weekly2-wrapper .slider-wrapper .weekly2-single .weekly2-caption h4 a{font-size:16px;font-weight:700;line-height:1.3;display:block;padding-right:20px}@media only screen and (min-width: 576px) and (max-width: 767px){.weekly2-news-area .weekly2-wrapper .slider-wrapper .weekly2-single .weekly2-caption h4 a{padding-right:0px}}.weekly2-news-area .weekly2-wrapper .slider-wrapper .weekly2-single .weekly2-caption h4 a:hover{color:#ff2143}.weekly2-news-area .weekly2-wrapper .slider-wrapper .weekly2-single .weekly2-caption p{color:#838793;font-size:12px;margin:0}.weekly2-news-area .weekly2-wrapper .slider-wrapper .home-banner2 img{width:100%}.weekly2-news-area .weekly2-news-active button{cursor:pointer}.weekly2-news-area .weekly2-news-active .slick-arrow{position:absolute;top:-46px;right:10px;background:none;border:none;color:#707b8e;padding:0;cursor:pointer;font-size:12px}.weekly2-news-area .weekly2-news-active .slick-prev.slick-arrow{right:37px}
    </style>
    </head>

    <body class="g-sidenav-show bg-gray-200">
        <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="preloader-circle"></div>
                    <div class="preloader-img pere-text">
                        <img src="/assets/img/logo/LogoA80.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="main-content position-relative max-height-vh-100 h-100">

            <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
                <div class="container-fluid py-1 px-3">
                    <nav aria-label="breadcrumb">
                        <div class="row d-flex align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-3 col-lg-3 col-md-3 d-none d-md-block">
                                <div class="logo">
                                    <a href="/"><img src="/assets/img/logo/Logo50.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                            <div class="input-group input-group-outline">
                                <label class="form-label">Type here...</label>
                                <input class="form-control" list="datalistOptions" oninput="GFG_Fun()" id="exampleDataList">
                                <datalist id="datalistOptions"></datalist>

                                <script>
                                    async function GFG_Fun() {
                                        var searchvar = document.getElementById('exampleDataList').value;

                                        response = await fetch('{{route("searchprofile")}}', {
                                            method: 'POST',
                                            headers: {
                                                'Content-Type': 'application/json'
                                            },
                                            body: JSON.stringify({
                                                'search': searchvar,
                                                '_token': '{{ csrf_token() }}'
                                            })
                                        });
                                        const data = await response.text();

                                        console.log(data);

                                        if (Number.isInteger(parseInt(data))) {
                                            var url = '/profile/'+data;
                                            window.location.replace(url);
                                            parseInt(data);
                                        }

                                        JSON.parse(data).forEach(function(info) {
                                            var string = '<option onclick="alert('+ info.user_id +')" value="'+ info.name +'">';

                                            document.getElementById("datalistOptions").innerHTML = string;
                                         });
                                    }
                                </script>
                            </div>
                        </div>
                        <ul class="navbar-nav  justify-content-end">
                            <li class="nav-item d-flex align-items-center">
                                @if ($profile->user_id == Auth::user()->id)
                                    <form action="{{route('logout')}}" method="post">
                                        @csrf
                                        <input class="btn bg-gradient-primary w-100 my-1 mb-1" type="submit" value="Logout">
                                    </form>
                                @endif
                            </li>
                            <li class="nav-item ps-3 dropdown pe-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell cursor-pointer"></i>
                            </a>
                                <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">

                                    @if (Auth::user()->notifications)
                                        @foreach (Auth::user()->notifications as $notification)
                                            <li class="mb-2">
                                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                                    <div class="d-flex py-1">
                                                    <div class="my-auto">
                                                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="text-sm font-weight-normal mb-1">
                                                        <span class="font-weight-bold">New message</span> from Laur
                                                        </h6>
                                                        <p class="text-xs text-secondary mb-0">
                                                        <i class="fa fa-clock me-1"></i>
                                                        13 minutes ago
                                                        </p>
                                                    </div>
                                                    </div>
                                                </a>
                                            </li>
                                        @endforeach
                                    @else
                                        <p>Nothing to see here!</p>
                                    @endif

                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            @yield('main')

            <footer class="footer py-4">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 mb-lg-0 mb-4">
                            <div class="copyright text-center text-sm text-muted text-lg-start">
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="{{route('index')}}" class="font-weight-bold">Prændi™</a>
                            </div>
                        </div>
                        <div class=" col-lg-6">
                            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                                <li class="nav-item">
                                    <a href="{{route('about')}}" class="nav-link text-muted">Prændi</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('terms')}}" class="nav-link text-muted">Terms and conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        @yield('toggle')

    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/material-dashboard.min.js?v=3.0.4"></script>

    <script src="/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="/assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/slick.min.js"></script>
    <!-- Date Picker -->
    <script src="/assets/js/gijgo.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/js/animated.headline.js"></script>
    <script src="/assets/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="/assets/js/jquery.scrollUp.min.js"></script>
    <script src="/assets/js/jquery.nice-select.min.js"></script>
    <script src="/assets/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="/assets/js/contact.js"></script>
    <script src="/assets/js/jquery.form.js"></script>
    <script src="/assets/js/jquery.validate.min.js"></script>
    <script src="/assets/js/mail-script.js"></script>
    <script src="/assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="/assets/js/plugins.js"></script>
    <script src="/assets/js/main.js"></script>
    </body>

</html>
