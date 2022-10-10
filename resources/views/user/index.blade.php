<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GB Tevta Home</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap-4.6.1-dist/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fontawesome-free-6.1.1-web/css/all.css')}}">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .nav-logo {
            transform: scale(2);
            width: 40%;
        }

        .intro-img {
            background-image: url(./assets/images/WOOD.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            /* z-index: -9; */
        }

        .intro-bg-c {
            background-color: rgb(0 0 0 / 60%);
        }

        .glance-img {
            background-image: url(/assets/images/lion.jpeg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .card-img-outer {
            overflow: hidden;
        }

        .card-img {
            transition: 0.6s;
        }

        .card-img:hover {
            transform: scale(1.1);
            transition: 0.6s ease-in-out;
        }
    </style>

</head>

<body>
    <!-- navbar section starts here -->
    <div class="container-fluid p-0 bg-white shadow sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="/">
                    <img src="{{asset('assets/images/tevta (2).png')}}" alt="Company logo" class="nav-logo" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="true" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav mx-auto ">
                        <a class="nav-link pl-0 pl-md-4 pl-lg-4 font-weight-bolder mt-2 active" href="/">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-link pl-0 pl-md-4 pl-lg-4 font-weight-bolder mt-2" href="/about">About&nbsp;Us</a>
                        <a class="nav-link pl-0 pl-md-4 pl-lg-4 font-weight-bolder mt-2" href="/AcadmicsAdmissions">Acadmics&nbsp;&&nbsp;Admissions</a>
                        <a class="nav-link pl-0 pl-md-4 pl-lg-4 font-weight-bolder mt-2" href="/blog">Blog</a>
                        <a class="nav-link pl-0 pl-md-4 pl-lg-4 font-weight-bolder mt-2" href="/job">Jobs&nbsp;Careers</a>
                        <a class="nav-link pl-0 pl-md-4 pl-lg-4 font-weight-bolder mt-2" href="/registrationform">Enroll&nbsp;Now</a>
                        <a class="nav-link pl-0 pl-md-4 pl-lg-4 font-weight-bolder mt-2" href="/contactUs">Contact&nbsp;Us</a>

                        @if(Route::has('login'))

                        @auth
                        <x-app-layout>

                        </x-app-layout>
                        @else

                        <a class="nav-link font-weight-bolder" href="/login"><button class="btn btn-outline-success">login</button></a>
                        <a class="nav-link font-weight-bolder" href="/register"><button class="btn btn-outline-success">register</button></a>
                        @endauth
                        @endif
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- navbar section ends here -->

    <!-- slider starts here -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-block w-100">
                    <img src="{{asset('assets/images/slider-1.png')}}" class="d-block w-100" alt="...">
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-block w-100">
                    <img src="{{asset('assets/images/slider-2.png')}}" class="d-block w-100" alt="...">
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-block w-100">
                    <img src="{{asset('assets/images/slider-3.png')}}" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
    <!-- slider ends here -->

    <!-- mini-navbar starts here -->
    <div class="container-fluid p-0 bg-light py-5">
        <div class="container bg-info p-2 p-md-5" style="border-radius: 10px">
            <div class="row m-0">
                <div class="col-12 col-md-4">
                    <h2 class="font-weight-bolder text-white">Best Platform <br> to Learn <br> Everything</h2>
                </div>
                <div class=" col-12 col-md-8">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="m-0 row d-block w-75 mx-auto">
                                    <div class="d-flex justify-content-around text-center">
                                        <div class="d-flex flex-column bg-danger p-3 m-1 rounded shadow">
                                            <i class="fas fa-book text-white h1"></i>
                                            <h4 class="text-white text-center font-weight-bolder">Programs</h4>
                                        </div>
                                        <div class="d-flex flex-column bg-warning p-3 m-1 rounded shadow">
                                            <i class="fas fa-trophy text-white h1"></i>
                                            <h4 class="text-white text-center font-weight-bolder">Events</h4>
                                        </div>
                                        <div class="d-flex flex-column bg-success p-3 m-1 rounded shadow">
                                            <i class="fas fa-user text-white h1"></i>
                                            <h4 class="text-white text-center font-weight-bolder">Admissions</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="m-0 row d-block w-75 mx-auto">
                                    <div class="d-flex justify-content-around text-center">
                                        <div class="d-flex flex-column bg-danger p-3 m-1 rounded shadow">
                                            <i class="fas fa-bullhorn text-white h1"></i>
                                            <h4 class="text-white text-center font-weight-bolder">Notice</h4>
                                        </div>
                                        <div class="d-flex flex-column bg-warning p-3 m-1 rounded shadow">
                                            <i class="fas fa-book-open text-white h1"></i>
                                            <h4 class="text-white text-center font-weight-bolder">Courses</h4>
                                        </div>
                                        <div class="d-flex flex-column bg-success p-3 m-1 rounded shadow">
                                            <i class="fas fa-newspaper text-white h1"></i>
                                            <h4 class="text-white text-center font-weight-bolder">News</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mini-navbar ends here -->

    <!-- tevta-glance starts here -->
    <div class="container-fluid bg-white p-0 py-5">
        <div class="container p-0">
            <div class="row m-0">
                <div class="col-12 col-md-5 p-0 glance-img">
                </div>
                <div class="col-12 col-md-7 p-0 bg-info">
                    <div class="p-4">
                        <h2 class="text-white text-left my-4">Gilgit TEVTA at a Glance</h2>
                        <p class="text-justify text-white">Established in 2022 through an Ordinance [XXIV of 2022] by merging Training Institutes from 7 different Departments of the Govenrment of Gilgit, as a Special Institution, Technical Educational & Vocational Training Institute was strengthened through an Act in 2022.</p>
                        <div class="d-flex flex-column py-3">
                            <a href="#" class="text-left text-white text-decoration-none font-weight-bolder">Core Values</a>
                            <a href="#" class="text-left text-white text-decoration-none font-weight-bolder">Diversified Student Body</a>
                            <a href="#" class="text-left text-white text-decoration-none font-weight-bolder">Living at Gilgit-TEVTA</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tevta-glance ends here -->

    <!-- News-&-Events starts here -->
    <div class="container-fluid p-0 py-5 bg-light">
        <div class="container">
            <h1 class="text-dark text-center my-3 font-weight-bolder">Latest News & <span class="text-success">Events</span></h1>
            <p class="text-dark text-center w-75 mx-auto">Stay updated with us you can see all the events and news related to us.</p>
            <div class="row m-0 py-3">
                <!-- 1st card -->
                @include('user.events')
            </div>
        </div>
    </div>
    <!-- News-&-Events ends here -->

    <!-- contact section starts here -->
    <div class="container-fluid bg-success p-0 py-5">
        <div class="container ">
            <div class="d-flex justify-content-between">
                <div class="inner-div">
                    <h2 class="text-white text-left font-weight-bolder">Do You Have Questions ?</h2>
                    <p class="text-left text-white">We’ll help you to grow your career and growth.</p>
                </div>
                <div class="inner-div">
                    <a href="/contactUs" class="text-decoration-none">
                        <button class="btn bg-white text-dark rounded-pill p-3 font-weight-bolder text-info">Contact Us Today</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- contact section ends here -->

    <!-- footer starts here -->
    <div class="container-fluid bg-secondary">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-4">
                    <a href="/"><img src="{{asset('assets/images/tevta (2).png')}}" class="w-25" alt="Company logo"></a>
                    <p class="text-light mt-5">We're on a mission to make our youth skillful.
                    </p>
                </div>
                <div class="offset-md-2 col-md-2">
                    <h4 class="text-light font-weight-bolder">Catogeries</h4>
                    <div class="d-flex flex-column">
                        <a href="#" class="text-light p-2 text-decoration-none">Mechanical</a>
                        <a href="#" class="text-light p-2 text-decoration-none">Fashion&nbsp;Designing</a>
                        <a href="#" class="text-light p-2 text-decoration-none">Cooking</a>
                        <a href="#" class="text-light p-2 text-decoration-none">Marketing</a>
                        <a href="#" class="text-light p-2 text-decoration-none">Others</a>
                    </div>
                </div>
                <div class="col-md-2">
                    <h4 class="text-light font-weight-bolder">Help Center</h4>
                    <div class="d-flex flex-column">
                        <a href="#" class="text-light p-2 text-decoration-none">Contact&nbsp;Us</a>
                        <a href="#" class="text-light p-2 text-decoration-none">Customers&nbsp;Care</a>
                        <a href="#" class="text-light p-2 text-decoration-none">FAQ</a>
                        <a href="/login" class="text-light p-2 text-decoration-none">Admin panel</a>
                        <a href="#" class="text-light p-2 text-decoration-none">Toll&nbsp;Free</a>
                    </div>
                </div>
                <div class="col-md-2">
                    <h4 class="text-light font-weight-bolder">Contact</h4>
                    <div class="d-flex flex-column">
                        <a href="#" class="text-light p-2 text-decoration-none">Let's Chat</a>
                    </div>
                </div>
            </div>
            <hr class="bg-light">
            <div class="d-flex justify-content-between">
                <div class="d-flex justify-content-between">
                    <a href="#" class="text-light nav-link text-decoration-none">Privacy</a>
                    <a href="#" class="text-light nav-link text-decoration-none">Services</a>
                    <a href="#" class="text-light nav-link text-decoration-none">Terms and conditions</a>
                </div>
                <div class="">
                    <a class="text-light text-decoration-none">Copyright 2022 | Developed by ALTAF HUSSAIN</a>
                </div>
            </div>
        </div>
    </div>
    <!-- footer ends here -->
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</html>