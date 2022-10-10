<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GB Tevta Blog</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap-4.6.1-dist/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fontawesome-free-6.1.1-web/css/all.css')}}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root{
            --success: #28a745;
        }
        a.text {
            color: var(--black);
            text-decoration: none;
        }

        .text-border {
            border-left: 5px solid rgb(54, 54, 54);
        }

        .text-border:hover {
            border-left: 5px solid var(--success);
        }

        .article .text {
            transition: 0.3s;
        }

        .article:hover .text {
            transition: 0.3s;
            color: var(--success);
        }

        a.categories-link {
            transition: 0.3s;
            color: var(--black);
        }

        a.categories-link:hover {
            transition: 0.3s;
            color: var(--success);
        }

        .pagination-lg {
            transition: 0.3s;
            color: var(--black);
        }

        .paginate {
            transition: 0.3s;
            color: var(--black);
        }

        .paginate:hover {
            transition: 0.3s;
            color: var(--white);
            background-color: var(--success);
        }

        .paginate.active {
            transition: 0.3s;
            color: var(--white);
            background-color: var(--success);
        }

        .p-tags {
            color: var(--black);
            transition: 0.5s;
        }

        .p-tags:hover {
            color: var(--white);
            transition: 0.5s;
            background-color: var(--success);
        }

        .img-outer {
            overflow: hidden;
        }

        .card-img {
            transition: 0.3s ease-in-out;
        }

        .card-img:hover {
            transform: scale(1.1);
            transition: 0.3s ease-in-out;
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
                        <a class="nav-link pl-0 pl-md-4 pl-lg-4 font-weight-bolder mt-2" href="/AcadmicsAdmissions">Acadmics&nbsp;&&nbsp;Admissions</a>
                        <a class="nav-link pl-0 pl-md-4 pl-lg-4 font-weight-bolder mt-2 active" href="/blog">blog <span class="sr-only">(current)</span></a>
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
                <h1 class="display-4 text-white font-weight-bold">Blog</h1>
                <ul class="d-flex justify-content-center bg-transparent list-unstyled">
                    <li class="p-1"><a href="./index.html" class="text-decoration-none text-white h5">Home</a></li>
                    <li class="p-2"><i class="fas fa-angle-right text-white"></i></li>
                    <li class="p-1"><a class="text-decoration-none text-success h5">Blog</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- intro ends here -->

    <!-- blogs starts here -->
    <div class="container-fluid p-0 pt-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        @include('user.Blog_card')
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="mb-5">
                        <form action="">
                            <div class="d-flex">
                                <input type="text" class="p-3 w-100" name="search" placeholder="Search..." value="" />
                                <div class="input-group-append bg-success">
                                    <button class="btn p-3" type="submit">
                                        <i class="fas fa-search text-white"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </aside>
                    <!-- categories section starts here -->
                    <div class=" my-3" id="categories-3">
                        <div>
                            <h4 class="py-3 font-weight-bold">Categories</h4>
                        </div>
                        <ul class="p-0 list-unstyled">
                            <li class="mt-2">
                                <a class="text-decoration-none categories-link font-weight-lighter" href="#">
                                    <i class="fas fa-angle-right mr-2"></i> Cooking
                                </a>
                            </li>
                            <li class="mt-2">
                                <a class="text-decoration-none categories-link font-weight-lighter" href="#">
                                    <i class="fas fa-angle-right mr-2"></i> Electrican
                                </a>
                            </li>
                            <li class="mt-2">
                                <a class="text-decoration-none categories-link font-weight-lighter" href="#">
                                    <i class="fas fa-angle-right mr-2"></i> Mechanic
                                </a>
                            </li>
                            <li class="mt-2">
                                <a class="text-decoration-none categories-link font-weight-lighter" href="#">
                                    <i class="fas fa-angle-right mr-2"></i> Fashion Designing
                                </a>
                            </li>
                            <li class="mt-2">
                                <a class="text-decoration-none categories-link font-weight-lighter" href="#">
                                    <i class="fas fa-angle-right mr-2"></i> Crafting
                                </a>
                            </li>
                            <li class="mt-2">
                                <a class="text-decoration-none categories-link font-weight-lighter" href="#">
                                    <i class="fas fa-angle-right mr-2"></i> Plumbing
                                </a>
                            </li>
                            <li class="mt-2">
                                <a class="text-decoration-none categories-link font-weight-lighter" href="#">
                                    <i class="fas fa-angle-right mr-2"></i> Others
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- catogerious section ends here -->

                    <!-- latest section starts here -->
                    <div class="Latest-post py-3" id="Latest-post">
                        <div>
                            <h4 class="my-3 font-weight-bold">Latest Post</h4>
                        </div>
                        <ul class="p-0">
                            @foreach($blog as $blogs)
                            <li class="mt-3 row">
                                <div class="col-5">
                                    <img src="blogimage/{{$blogs->blog_image}}" alt="Img related to post" class="w-100 card-img-top">
                                </div>
                                <div class="col-7">
                                    <a href="#" class="text-decoration-none categories-link">
                                        <h5 class=""> {{$blogs->blog_title}}</h5>
                                        <p class="">
                                            <i class="fas fa-calendar-week text-dark mr-2"></i>
                                            <span class=""> {{$blogs->blog_date}}</span>
                                        </p>
                                    </a>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- latest section ends here -->

                    <!-- popular-tags section starts here -->
                    <div class="popular-tags py-3" id="Latest-post">
                        <div>
                            <h4 class="my-3 font-weight-bold">Popular Tags</h4>
                        </div>
                        <ul class="p-0">

                            <li class="my-3 mx-1 d-inline-block">
                                <a href="#" class="py-2 px-3 p-tags text-decoration-none border">Training centers</a>
                            </li>
                            <li class="my-3 mx-1 d-inline-block">
                                <a href="#" class="py-2 px-3 p-tags text-decoration-none border">Cooking</a>
                            </li>
                            <li class="my-3 mx-1 d-inline-block">
                                <a href="#" class="py-2 px-3 p-tags text-decoration-none border">Gilgit</a>
                            </li>
                            <li class="my-3 mx-1 d-inline-block">
                                <a href="#" class="py-2 px-3 p-tags text-decoration-none border">Sewing</a>
                            </li>
                            <li class="my-3 mx-1 d-inline-block">
                                <a href="#" class="py-2 px-3 p-tags text-decoration-none border">Hunza</a>
                            </li>
                            <li class="my-3 mx-1 d-inline-block">
                                <a href="#" class="py-2 px-3 p-tags text-decoration-none border">Nagar</a>
                            </li>
                            <li class="my-3 mx-1 d-inline-block">
                                <a href="#" class="py-2 px-3 p-tags text-decoration-none border">Ghizer</a>
                            </li>
                            <li class="my-3 mx-1 d-inline-block">
                                <a href="#" class="py-2 px-3 p-tags text-decoration-none border">Astore</a>
                            </li>
                            <li class="my-3 mx-1 d-inline-block">
                                <a href="#" class="py-2 px-3 p-tags text-decoration-none border">Kharmang</a>
                            </li>
                            <li class="my-3 mx-1 d-inline-block">
                                <a href="#" class="py-2 px-3 p-tags text-decoration-none border">Skardu</a>
                            </li>
                            <li class="my-3 mx-1 d-inline-block">
                                <a href="#" class="py-2 px-3 p-tags text-decoration-none border">Ganche</a>
                            </li>
                        </ul>
                    </div>
                    <!-- popular tags ends here -->
                </div>
            </div>
        </div>
    </div>
    <!-- blogs ends here -->

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
                        <button class="btn bg-white text-dark rounded-pill p-3 font-weight-bolder text-success">Contact Us Today</button>
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