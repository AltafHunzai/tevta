<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GB Tevta contact us</title>
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
                        <a class="nav-link pl-0 pl-md-4 pl-lg-4 font-weight-bolder mt-2" href="/AcadmicsAdmissions">Acadmics&nbsp;&&nbsp;Admissions</a>
                        <a class="nav-link pl-0 pl-md-4 pl-lg-4 font-weight-bolder mt-2" href="/blog">Blog</a>
                        <a class="nav-link pl-0 pl-md-4 pl-lg-4 font-weight-bolder mt-2" href="/job">Jobs&nbsp;Careers</a>
                        <a class="nav-link pl-0 pl-md-4 pl-lg-4 font-weight-bolder mt-2" href="/registrationform">Enroll&nbsp;Now</a>
                        <a class="nav-link pl-0 pl-md-4 pl-lg-4 font-weight-bolder mt-2 active" href="/contactUs">Contact&nbsp;Us <span class="sr-only">(current)</span></a>

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
                    <h1 class="display-4 text-white font-weight-bold">Contact Us</h1>
                    <ul class="d-flex justify-content-center bg-transparent list-unstyled">
                        <li class="p-1"><a href="./index.html" class="text-decoration-none text-white h5">Home</a></li>
                        <li class="p-2"><i class="fas fa-angle-right text-white"></i></li>
                        <li class="p-1"><a class="text-decoration-none text-success h5">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- intro ends here -->
    
    <!-- contact us form starts here -->
    <div class="container my-4">
        <div class="contact-heading">
            <h1 class="text-center font-weight-bold py-3 py-sm-5">Contact <span class="text-success"> Form</span></h1>
        </div>
        <div class="contact-form">
            <form class="row">
                <div class="col-md-4">
                    <input type="text" placeholder="Name" class="bg-light p-3 m-3 border-0 w-100">
                </div>
                <div class="col-md-4">
                    <input type="text" placeholder="Number" class="bg-light p-3 m-3 border-0 w-100">
                </div>
                <div class="col-md-4">
                    <input type="text" placeholder="Email" class="bg-light p-3 m-3 border-0 w-100">
                </div>
                <div class="col-md-12">
                    <textarea name="user-message" id="user-message" placeholder="Message" class="w-100 p-3 m-3 border-0 bg-light" rows="6"></textarea>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="w-100 font-weight-bold p-3 m-3 btn-success btn rounded-0">SEND NOW</button>
                </div>
            </form>
        </div>
    </div>
    <!-- contact us form ends here -->

    <!-- contact-info sect starts here -->
    <div class="container-fluid p-0 bg-light">
        <div class="container py-5">
            <div class="contact-heading">
                <h1 class="text-center font-weight-bold py-3 py-sm-5">Contact <span class="text-success">Information</span></h1>
            </div>
            <div class="contact-information row ">
                <div class="col-lg-4 col-sm-6">
                    <div class="contact_info_item text-center">
                        <i class="fas fa-location-dot text-success h1"></i>
                        <h4 class="my-3">Location</h4>
                        <div class="my-2">Tevta Karakoram International university Konadass Gilgit, Gilgit Baltistan</div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="contact_info_item text-center">
                        <i class="fas fa-phone text-success h1"></i>
                        <h4 class="my-3">Contact Number</h4>
                        <div class="my-2">+923123456789 (Whatsapp)</div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="contact_info_item text-center">
                        <i class="fas fa-envelope-open-text text-success h1"></i>
                        <h4 class="my-3">Mail Address</h4>
                        <div class="my-2">Tevta-GB@gov.pk</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact-info sect ends here -->

    <!-- company location embed starts here -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3230.8934278874867!2d74.36227761475341!3d35.9251085241666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e64829f88d75a7%3A0x88b009cfe8e5e216!2sKarakoram%20International%20University!5e0!3m2!1sen!2snl!4v1662009317639!5m2!1sen!2snl" style="height: 50vh;" class="w-100 border-0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <!-- company location embed ends here -->

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