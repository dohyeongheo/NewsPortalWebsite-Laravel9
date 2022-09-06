<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <title>News Portal Website</title>

    <link rel="icon" type="image/png" href="{{ asset('uploads/favicon.png') }}">

    @include('front.layout.styles')

    @include('front.layout.scripts')

    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600;700&display=swap" rel="stylesheet">

    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-6212352ed76fda0a"></script>

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-84213520-6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-84213520-6');
    </script>

</head>

<body>
    <div class="top">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul>
                        <li class="today-text">Today: January 20, 2022</li>
                        <li class="email-text">contact@arefindev.com</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="right">
                        <li class="menu"><a href="faq.html">FAQ</a></li>
                        <li class="menu"><a href="{{ route('about') }}">About</a></li>
                        <li class="menu"><a href="contact.html">Contact</a></li>
                        <li class="menu"><a href="login.html">Login</a></li>
                        <li>
                            <div class="language-switch">
                                <select name="">
                                    <option value="">English</option>
                                    <option value="">Hindi</option>
                                    <option value="">Arabic</option>
                                </select>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="heading-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 d-flex align-items-center">
                    <div class="logo">
                        <a href="route('home')">
                            <img src="uploads/logo.png" alt="">
                        </a>
                    </div>
                </div>
                @if ($global_top_ad_data->top_ad_status == 'Show')
                <div class="col-md-8">
                    <div class="ad-section-1">
                        @if ($global_top_ad_data->top_ad_url == '')
                        <img src="{{ asset('uploads/'.$global_top_ad_data->top_ad) }}" alt="">
                        @else
                        <a href="{{ $global_top_ad_data->top_ad_url}}">
                            <img src="{{ asset('uploads/'.$global_top_ad_data->top_ad) }}" alt=""></a>
                        @endif
                    </div>
                </div>
                @endif

            </div>
        </div>
    </div>

    @include('front.layout.nav')

    @yield('main_content')



    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="item">
                        <h2 class="heading">About Us</h2>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item">
                        <h2 class="heading">Useful Links</h2>
                        <ul class="useful-links">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="terms.html">Terms and Conditions</a></li>
                            <li><a href="privacy.html">Privacy Policy</a></li>
                            <li><a href="disclaimer.html">Disclaimer</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="item">
                        <h2 class="heading">Contact</h2>
                        <div class="list-item">
                            <div class="left">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="right">
                                34 Antiger Lane,<br>
                                PK Lane, USA, 12937
                            </div>
                        </div>
                        <div class="list-item">
                            <div class="left">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="right">
                                contact@arefindev.com
                            </div>
                        </div>
                        <div class="list-item">
                            <div class="left">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="right">
                                122-222-1212
                            </div>
                        </div>
                        <ul class="social">
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href=""><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="item">
                        <h2 class="heading">Newsletter</h2>
                        <p>
                            In order to get the latest news and other great items, please subscribe us here:
                        </p>
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="text" name="" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Subscribe Now">
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="copyright">
        Copyright 2022, ArefinDev. All Rights Reserved.
    </div>

    <div class="scroll-top">
        <i class="fas fa-angle-up"></i>
    </div>

    @include('front.layout.scripts_footer')


</body>

</html>
