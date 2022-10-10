<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GB Tevta jobs careers</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap-4.6.1-dist/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fontawesome-free-6.1.1-web/css/all.css')}}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .about-banner {
            background-image: url(/assets/images/lion.jpeg);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .about-banner-inner {
            background-color: rgb(40 167 69 / 0.8);
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

        .nav-logo {
            transform: scale(2);
            width: 40%;
        }
    </style>
</head>

<body>

    <!-- navbar section starts here -->
    <div class="container-fluid p-0 bg-light shadow sticky-top">
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
                        <a class="nav-link pl-0 pl-md-4 pl-lg-4 font-weight-bolder mt-2" href="/">Home</a>
                        <a class="nav-link pl-0 pl-md-4 pl-lg-4 font-weight-bolder mt-2" href="/about">About&nbsp;Us</a>
                        <a class="nav-link pl-0 pl-md-4 pl-lg-4 font-weight-bolder mt-2 active" href="/AcadmicsAdmissions">Acadmics&nbsp;&&nbsp;Admissions <span class="sr-only">(current)</span></a>
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

    <!-- intro starts here -->
    <div class="container-fluid p-0 intro-img">
        <div class=" container-fluid intro-bg-c p-5">
            <div class="container text-center p-5">
                <h1 class="display-4 text-white font-weight-bold">Schools of Gb Tevta</h1>
                <ul class="d-flex justify-content-center bg-transparent list-unstyled">
                    <li class="p-1"><a href="/" class="text-decoration-none text-white h5">Home</a></li>
                    <li class="p-2"><i class="fas fa-angle-right text-white"></i></li>
                    <li class="p-1"><a href="/AcadmicsAdmissions" class="text-decoration-none text-white h5">Acadmics & Research</a></li>
                    <li class="p-2"><i class="fas fa-angle-right text-white"></i></li>
                    <li class="p-1"><a class="text-decoration-none text-success h5">Schools of Gb Tevta</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- intro ends here -->

    <!-- courses section starts here -->
    <div class="container-fluid p-0 py-5 bg-light">
        <!-- <h1 class="text-center text-dark font-weight-bolder">Schools of <span class="text-success">GB&nbsp;Tevta</span></h1> -->
        <div class="container">
                @include('user.course_card')
        </div>
    </div>
    <!-- courses section ends here -->

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