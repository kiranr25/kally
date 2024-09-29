<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Kally Threading</title>
    <meta name="keywords" content="Kally Threading, Thready, Beautiful, ">
    <meta name="description" content="Kally Threading was started in the living room of a single bedroom apartment in 2016. Kally Threading is now the leading beauty salon in Western Washington serving Pierce, Thurston, and Kitsap county. Kally Threading plans to expands its footprint throughout Washington State and neighboring states.">
    <meta name="author" content="KallyThreading">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">
    <!-- fevicon -->
    <link rel="icon" href="images/logoSmall.jpg" type="" />
    <link rel="shortcut icon" type="image/x-icon" href="images/logoSmall.jpg">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->
<style>
    h3{
        font-weight: bold;
    }


</style>
<body class="main-layout">
<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
</div>
<!-- end loader -->
<!-- header -->
<header>
    <!-- header inner -->
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-9 col-sm-9">
                    <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html"> Home  </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#service">Service</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#team">Teams</a>
                                </li>
                                <!-- <li class="nav-item">
                                   <a class="nav-link" href="#contact">Contact Us</a>
                                </li> -->
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo" >
                                <a href="index.html"><img src="images/logoSmall.jpg" alt="#" style="max-height: 100px;" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-5 flex-end col-sm-5">
                    <ul class="email d-flex">
                        <li><a href="#">Call: +2534740952</a><br/></li>
                        <li><a href="#">kally.threading@gmail.com</li>

                    </ul>
                    <div class="pull-right" style="margin-right:80px;">
                        <a href="./login"> <button style="background:red;padding:5px 55px;border-radius:10px;color:white;">Login</button></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header inner -->
<!-- end header -->
<!-- banner -->
<section class="banner_main">
    <div id="banner1" class="carousel slide" data-ride="carousel" style="width: 100%;">
        <ol class="carousel-indicators">
            <li data-target="#banner1" data-slide-to="0" class="active"></li>
            <li data-target="#banner1" data-slide-to="1"></li>
            <li data-target="#banner1" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" style="min-height: 500px;background-image:url('./images/slider1.png');height:700px;width:100%;background-size:cover;display:grid;align-items:center;justify-content:center">
                <div class="container-fluid">
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-md-12 " style="display: grid;justify-content:center;align-items:center;height:100%;">
                                <div class="text-bg text-center" style="margin-top: 100px;">
                                    <span style="back">Welcome to</span>
                                    <h1>Kally Threading</h1>
                                    <p><b style="color:white">Your Beauty is Our Duty.</b></p>
                                    <a href="#service">Our Services</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
        <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
    </a>
    <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
    </a>
    </div>
</section>
<!-- end banner -->
<!-- service -->
<div class="mt-5 pt-2" id="service">
    <div class="">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2> <img src="images/head.png" alt="#"/> Our Services</h2>
                </div>
            </div>
        </div>
        <div class="d-flex flex-wrap">
            <div class="col-md-3">
                <div id="hover_chang" class="service_box">
                    <i><img src="images/service1.jpeg" alt="#"/></i>
                    <h3> Threading</h3>

                    <p>Unlike tweezing, where single hairs are pulled out one at a time, threading can remove short rows of hair.
                    </p>

                    <div class="card-body text-left">
                        <ul>
                            <li class="d-flex justify-content-between">
                                <span><b>Eye Brows</b></span>

                                <span>$10</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span><b>Full face</b></span>

                                <span>$35</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span><b>Forehead</b></span>
                                <span>$10</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span><b>Upper Lip</b></span>

                                <span>$5</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span><b>Ear/ Nose/ Neck</b></span>

                                <span>$10 & up</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span><b>Chin</b></span>

                                <span>$5</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span><b>Sides</b></span>

                                <span>$15</span>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div id="hover_chang" class="service_box">
                    <i><img src="images/Waxing.jpg" alt="#"/></i>
                    <h3>Waxing</h3>

                    <p>Process of hair removal from the root by using wax, to adhere to body hair, and then removing this covering and pulling out the hair from the follicle
                    </p>

                    <div class="card-body text-left">
                        <ul>
                            <li class="d-flex justify-content-between">
                                <span><b>Underarm</b></span>

                                <span>$15 & up</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span><b>Full Arm</b></span>

                                <span>$45 & up</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span><b>Half Arm</b></span>
                                <span>$30 & up</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span><b>Full Leg</b></span>

                                <span>$60 & up</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span><b>Half Leg</b></span>

                                <span>$40 & up</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span><b>Brazillian</b></span>

                                <span>$60 & up</span>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div id="hover_chang" class="service_box">
                    <i><img src="images/facial.jpeg" alt="#"/></i>
                    <h3>Facial</h3>

                    <p>A facial is a family of skin care treatments for the face, including steam, exfoliation, extraction, creams, lotions, facial masks, peels, and massage.
                    </p>

                    <div class="card-body text-left">
                        <ul>
                            <li class="d-flex justify-content-between">
                                <span><b>Facial</b></span>

                                <span>$60 & up</span>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div id="hover_chang" class="service_box">
                    <i><img src="images/Henna.jpg" alt="#"/></i>
                    <h3><b>Henna Tattoo</b></h3>

                    <p>A henna tattoo is a temporary body art technique that involves drawing designs on the skin using a henna-based ink.
                    </p>

                    <div class="card-body text-left">
                        <ul>
                            <li class="d-flex justify-content-between">
                                <span><b>Price varies by size & design</b></span>

                                <span>$15 and up</span>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div id="hover_chang" class="service_box">
                    <i><img src="images/lashlift.jpg" alt="#"/></i>
                    <h3>Lash Lift/Perm</h3>

                    <p>Lash Lift is the process of lifting your own natural lashes.
                    </p>

                    <div class="card-body text-left">
                        <ul>
                            <li class="d-flex justify-content-between">
                                <span><b>Lash Lift</b></span>

                                <span>$60</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span><b>Lash Lift & Tint</b></span>

                                <span>$75</span>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div id="hover_chang" class="service_box">
                    <i><img src="images/lamination.jpg" alt="#"/></i>
                    <h3>Brow Lamination</h3>

                    <p>Brow lamination is a perm for your brows, as it gives them a set, uniform shape for an extended period of time
                    </p>

                    <div class="card-body text-left">
                        <ul>
                            <li class="d-flex justify-content-between">
                                <span><b>Brow Lamination</b></span>

                                <span>$60</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span><b>Brow Lamination w/ tint</b></span>

                                <span>$75</span>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>


            <div class="col-md-3">
                <div id="hover_chang" class="service_box">
                    <i><img src="images/Tinting.jpg" alt="#"/></i>
                    <h3>Tinting</h3>

                    <p>It’s a process where semi-permanent dye is smoothed over your brows to shape and define your natural arches
                    </p>

                    <div class="card-body text-left">
                        <ul>
                            <li class="d-flex justify-content-between">
                                <span><b>Eyebrows</b></span>

                                <span>$15</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span><b>Eye lash</b> </span>

                                <span>$25</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span><b>Eyebrows tinting and threading</b></span>
                                <span>$25</span>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div id="hover_chang" class="service_box">
                    <i><img src="images/eyelashes.jpg" alt="#"/></i>
                    <h3>Lash Extension</h3>

                    <p>Eyelash extensions are a cosmetic application used to enhance the length, curl, fullness, and thickness of natural eyelashes
                    </p>

                    <div class="card-body text-left">
                        <ul>
                            <li class="d-flex justify-content-between">
                                <span><b>Classic</b></span>

                                <span>$99</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span><b>Hybrid</b> </span>

                                <span>$119</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span><b>Volume</b></span>
                                <span>$149</span>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- service -->
<!-- about -->
<div id="about"  class="about" style="margin-top: 50px;">
    <div class="container-fluid">
        <div class="p-2 p-sm-5 d-flex flex-wrap">
            <div class="col-md-6 d-12">
                <div class="titlepage">
                    <h2> <img src="images/head.h.png" alt="#"/> About Kally Threading</h2>
                    <p>Kally Threading was started in the living room of a single bedroom apartment in 2016. Kally Threading is now the leading beauty salon in Western Washington serving Pierce, Thurston, and Kitsap county. Kally Threading plans to expands its footprint throughout Washington State and neighboring states.

                        We’re spreading the word about threading. It's astounding! A process that provides sculpted grooming without the redness, bumps, pain, or allergic reactions associated with other methods. Our convenient location provides you with wonderful experience that only takes minutes. Stop in as a short rest while you're shopping or pick up grocery Kally Threading as your destination - We will fit your schedule. We're glad to welcome, just stop by or make an appointment at any of our locations. It will become an indispensable part of your routine.

                        Our expert threading professionals will leave your skin smooth and hair free, without breaking your bank. We also offer a full range of other services such as Waxing, Eyebrow Tinting, Eyelash Extensions, Eyelash Lift/Tint, Facials, Brow Lamination and Henna. Please stop by and let us serve you!</p>

                </div>
            </div>
            <div class="col-md-6 d-none d-sm-block">
                <div class="row">
                    <img src="./images/service1.jpeg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end about -->
<div id="team" class="mt-5 pt-5" style="margin-top: 50px;">
    <div class="pl-5 pr-5">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2> <img src="images/head.png" alt="#"/> Our Teams</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">

                <div class="img" style="background-image: url(images/team1.jpg);height:300px;width:100%;background-size:cover;background-position:center;"></div>

                <h3 class="text-center p-2 bold">Kally</h3>
            </div>
            <div class="col-lg-3">

                <div class="img" style="background-image: url(images/team2.jpg);height:300px;width:100%;background-size:cover;"></div>

                <h3 class="text-center p-2 bold">Jessica</h3>
            </div>
            <div class="col-lg-3">

                <div class="img" style="background-image: url(images/team3.jpg);height:300px;width:100%;background-size:cover;background-position:center;"></div>

                <h3 class="text-center p-2 bold">KC</h3>
            </div>
            <div class="col-lg-3">

                <div class="img" style="background-image: url(images/team4.jpg);height:300px;width:100%;background-size:cover;"></div>

                <h3 class="text-center p-2 bold">KP</h3>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-3">

                <div class="img" style="background-image: url(images/team5.jpg);height:300px;width:100%;background-size:cover;background-position:center;"></div>

                <h3 class="text-center p-2 bold">Sumi</h3>
            </div>
            <div class="col-lg-3">

                <div class="img" style="background-image: url(images/team6.jpg);height:300px;width:100%;background-size:cover;"></div>

                <h3 class="text-center p-2 bold">Ayasha</h3>
            </div>
            {{-- <div class="col-lg-3">

               <div class="img" style="background-image: url(images/team7.jpg);height:300px;width:100%;background-size:cover;"></div>

                  <h3 class="text-center p-2 bold">Jyoti</h3>
            </div> --}}
            {{--<div class="col-lg-3">--}}

            {{--   <div class="img" style="background-image: url(images/team8.jpg);height:300px;width:100%;background-size:cover;"></div>--}}

            {{--      <h3 class="text-center p-2 bold">Angela</h3>--}}
            {{--   </div>--}}
            <div class="col-lg-3">

                <div class="img" style="background-image: url(images/team9.jpg);height:300px;width:100%;background-size:cover;background-position:center;"></div>

                <h3 class="text-center p-2 bold">Jack</h3>
            </div>
            <div class="col-lg-3">

                <div class="img" style="background-image: url(images/team10.jpg);height:300px;width:100%;background-size:cover;background-position:center;"></div>

                <h3 class="text-center p-2 bold">Neelam</h3>
            </div>
            <div class="col-lg-3">

                <div class="img" style="background-image: url(images/team11.jpg);height:300px;width:100%;background-size:cover;background-position:center;"></div>

                <h3 class="text-center p-2 bold">Rina</h3>
            </div>
            <div class="col-lg-3">

                <div class="img" style="background-image: url(images/kumari.jpg);height:300px;width:100%;background-size:cover;background-position:center;"></div>

                <h3 class="text-center p-2 bold">Kumari</h3>
            </div>
            <div class="col-lg-3">

                <div class="img" style="background-image: url(images/team13.jpg);height:300px;width:100%;background-size:cover;background-position:center;"></div>

                <h3 class="text-center p-2 bold">Lisa</h3>
            </div>
            <div class="col-lg-3">

                <div class="img" style="background-image: url(images/team14.jpg);height:300px;width:100%;background-size:cover;background-position:center;"></div>

                <h3 class="text-center p-2 bold">Arati</h3>
            </div>
            <div class="col-lg-3">

                <div class="img" style="background-image: url(images/puja.jpg);height:300px;width:100%;background-size:cover;background-position:center;"></div>

                <h3 class="text-center p-2 bold">Puja</h3>
            </div>
            <div class="col-lg-3">

                <div class="img" style="background-image: url(images/poonam.jpg);height:300px;width:100%;background-size:cover;background-position:center;"></div>

                <h3 class="text-center p-2 bold">Poonam</h3>
            </div>
            <div class="col-lg-3">

                <div class="img" style="background-image: url(images/sophya.jpg);height:300px;width:100%;background-size:cover;background-position:center;"></div>

                <h3 class="text-center p-2 bold">Sophya</h3>
            </div>
            <div class="col-lg-3">

                <div class="img" style="background-image: url(images/khusbu.jpg);height:300px;width:100%;background-size:cover;background-position:center;"></div>

                <h3 class="text-center p-2 bold">Khusbu</h3>
            </div>


        </div>
    </div>
</div>
</div>

<!-- customer -->
<div style="margin-top: 70px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2> <img src="images/head.png" alt="#"/> Our Customer Feedback</h2>
                </div>
            </div>
        </div>
        <div id="myCarousel" class="carousel slide customer_Carousel " data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="carousel-caption ">
                            <div class="test_box">
                                <!-- <i><img src="images/tes.png" alt="#"/></i> -->
                                <h4>~Renee</h4>
                                <span>customer</span>
                                <p>I highly recommend Kally Threading, today was the first time I have ever had my lashes or eyebrows done. No pain with the eyebrow threading & tint or eyelash lift & tint. It took about hour for all services and staff were amazing. The one important thing is to follow the instructions to not wash your face for 24 hrs. The tint should last approximately 5 months. Reasonable priced as well. I would highly reccommend and will be a regular customer!!

                                </p>
                                <img src="images/icon.png" alt="#"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="carousel-caption">
                            <div class="test_box">
                                <!-- <i><img src="images/tes.png" alt="#"/></i> -->
                                <h4> ~Svetlana</h4>
                                <span>customer</span>
                                <p>Came in to get henna and worked with Jessica. I picked out my own designs and brought it to her and she did such an impressive job with the henna. Both Jessica and Kally were in today and both are such nice friendly girls, definitely recommend them!

                                </p>
                                <img src="images/icon.png" alt="#"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</div>
<!-- end customer -->

</div>
<div id="location" class="mt-5 pt-5" style="margin-top: 50px;">
    <div class="pl-5 pr-5">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2> <img src="images/head.png" alt="#"/>~ Locations ~</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 text-center" >
                <div class="p-5" style="border: 1px solid rgb(85, 84, 84);font-weight:bolder">
                    <p><b style="font-weight:bolder;font-size:24px;">Lakewood</b></p>
                    <b><a href="https://www.google.com/maps/search/6111+Lakewood+Towne+Center+Blvd+SW+O-1/@47.1653822,-122.5213899,17z/data=!3m1!4b1" target="_blank">6111 Lakewood Towne Center Blvd SW O-1</a>
                    </b><br/>
                    <p><i class="fa fa-phone"></i>(253)212 3497</p>

                    <p>Lakewood, WA 98499</p>
                    <p><b><u>Hours</u></b></p>
                    <p>Mon-Sat(10am to 7pm)</p>


                    <p>Sun(11am to 6pm)</p></b>
                    <p>Gmail:<b>kally.threading@gmail.com</b></p>

                </div>
            </div>
            <div class="col-lg-4 text-center" >
                <div class="p-5" style="border: 1px solid rgb(85, 84, 84);font-weight:bolder">
                    <p><b style="font-weight:bolder;font-size:24px;">Lacey</b></p>
                    <b><a href="https://goo.gl/maps/97syy7z2Wb1PStyh7" target="_blank">Lacey, WA 98516 </b>
                    <b>1120 Galaxy Dr NE Suite E
                    </b><br/></a>

                    <p><i class="fa fa-phone"></i>(360)539 7941</p>

                    <p><b><u>Hours</u></b></p>
                    <p>Mon-Sat(10am to 7pm)</p>

                    <p>Sun(11am to 6pm)</p></b>
                    <p>Gmail:<b>kally.threading@gmail.com</b></p>
                </div>
            </div>
            <div class="col-lg-4 text-center" >
                <div class="p-5" style="border: 1px solid rgb(85, 84, 84);font-weight:bolder">
                    <p><b style="font-weight:bolder;font-size:24px;">Puyallup</b></p>
                    <b><a href="https://goo.gl/maps/ijKAhKkYRva8BYUT8" target="_blank">13507 Meredian E
                        </a>
                    </b><br/>
                    <p><i class="fa fa-phone"></i>(253)268 0876</p>

                    <p>Tacoma, WA 98408</p>

                    <p><b><u>Hours</u></b></p>
                    <p>Mon-Sat(10am to 7pm)</p>

                    <p>Sun(11am to 6pm)</p></b>
                    <p>Gmail:<b>kally.threading@gmail.com</b></p>

                </div>
            </div>
        </div>
        <div class="row mt-5" style="justify-content:center">
            <div class="col-lg-3 text-center" >
                <div class="p-5" style="border: 1px solid rgb(85, 84, 84);font-weight:bolder">
                    <p><b style="font-weight:bolder;font-size:24px;">Silverdale</b></p>
                    <b><a href="https://goo.gl/maps/wMvm3mXGHkxp6G8y7" target="_blank">10406 Silverdale Way NW D103</a>
                    </b><br/>
                    <p><i class="fa fa-phone"></i>(360)692 3359</p>
                    <p> Silverdale, WA 98383</p>
                    <p><b><u>Hours</u></b></p>
                    <p>Mon-Sat(11am to 7pm)</p>

                    <p>Sun(11am to 5pm)</p></b>
                    <p>Gmail:<b>kally.threading@gmail.com</b></p>
                </div>
                <br/>
            </div>

            <div class="col-lg-3 text-center" >
                <div class="p-5" style="border: 1px solid rgb(85, 84, 84);font-weight:bolder">
                    <p><b style="font-weight:bolder;font-size:24px;">Tacoma</b></p>
                    <b><a href="https://www.google.com/maps/search/1801+S+72nd+Street,+C-30A/@47.1922016,-122.4626288,17z/data=!3m1!4b1" target="_blank">1801 S 72nd Street, C-30A </b><br/>
                    <b>Tacoma, WA 98408<br/></a>
                        <p><i class="fa fa-phone"></i>(253)474 0952</p>
                        <p><b><u>Hours</u></b></p>
                        <p>Mon-Sat(10am to 7pm)</p>

                        <p>Sun(11am to 6pm)</p></b>
                    <p>Gmail:<b>kally.threading@gmail.com</b></p>
                </div>

            </div>

            <div class="col-lg-3 text-center" >
                <div class="p-5" style="border: 1px solid rgb(85, 84, 84);font-weight:bolder">
                    <p><b style="font-weight:bolder;font-size:24px;">TumWater</b></p>
                    <b><a href="https://goo.gl/maps/UANZq9XeJRAyMzEN6" target="_blank">TumWater, WA 98512</a></b><br/>
                    <b><i class="fa fa-phone"></i> (360)915 7531
                    </b>

                    <p>5729 Littlerrock Rd SE</p>
                    <p><b><u>Hours</u></b></p>
                    <p>Mon-Sat(10am to 6pm)</p>


                    <p>Sun(Closed)</p></b>
                    <p>Gmail:<b>kally.threading@gmail.com</b></p>

                </div>
            </div>

            <div class="col-lg-3 text-center" >
                <div class="p-5" style="border: 1px solid rgb(85, 84, 84);font-weight:bolder">
                    <p><b style="font-weight:bolder;font-size:24px;">FEDERAL WAY</b></p>
                    <b><a href="https://goo.gl/maps/UANZq9XeJRAyMzEN6" target="_blank">Federal Way, WA 98003</a></b><br/>
                    <b><i class="fa fa-phone"></i> 253 252 2993
                    </b>

                    <p>1413 S 348th St Suite L-103</p>
                    <p><b><u>Hours</u></b></p>
                    <p>Mon-Sat(10am to 7pm)</p>


                    <p>Sun(11am to 6pm)</p></b>
                    <p>Gmail:<b>kally.threading@gmail.com</b></p>

                </div>
            </div>


        </div>
    </div>
</div>
<!-- franchise -->
<div class="franchise" style="margin-top: 50px;">
    <div class="container">
        <div class="titlepage">
            <h2> FRANCHISE OPPORTUNITY</h2>
            <h3  style="color:white; font-size:20px;">Interested? Send us email at </h3>
            <h3 style="color:white; font-size:30px;">kally.threading@gmail.com</h3>
        </div>
    </div>
</div>
<!-- end franchise -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>©{{date('Y')}} Kally Threading. All Rights Reserved</p>
            </div>
        </div>
    </div>
</div>


<!-- Javascript files-->
<script src="{{ asset('js/jquery.min.js')}}"></script>
<script src="{{ asset('js/popper.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('js/jquery-3.0.0.min.js')}}"></script>
<!-- sidebar -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="{{ asset('js/custom.js')}}"></script>
<script>
    $('a[href^="#"]').on('click', function(event) {

        var target = $(this.getAttribute('href'));

        if( target.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 2000);
        }

    });
</script>
</body>
</html>

