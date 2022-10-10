<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GB Tevta AcadmicsAdmissions</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap-4.6.1-dist/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fontawesome-free-6.1.1-web/css/all.css')}}">
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
                <h1 class="display-4 text-white font-weight-bold">Acadmics & Admissions</h1>
                <ul class="d-flex justify-content-center bg-transparent list-unstyled">
                    <li class="p-1"><a href="/" class="text-decoration-none text-white h5">Home</a></li>
                    <li class="p-2"><i class="fas fa-angle-right text-white"></i></li>
                    <li class="p-1"><a class="text-decoration-none text-success h5">Acadmics & Admissions</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- intro ends here -->

    <!-- Acadmics details section starts here -->
    <!-- <div class="container my-5">
        <h1 class="text-center text-dark font-weight-bolder my-5">Schools of GB <span class="text-success"> Tevta</span></h1>
        <div class="row">
            <div class="col-12 col-sm-3">
                <div class="nav flex-row flex-sm-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link text-left border-0 p-3 active" id="v-pills-civil-tab" data-toggle="pill" data-target="#v-pills-civil" type="button" role="tab" aria-controls="v-pills-civil" aria-selected="true">School of Civil & Construction</button>
                    <button class="nav-link text-left border-0 p-3" id="v-pills-petrol-tab" data-toggle="pill" data-target="#v-pills-petrol" type="button" role="tab" aria-controls="v-pills-petrol" aria-selected="false">School of Petro chemical</button>
                    <button class="nav-link text-left border-0 p-3" id="v-pills-electronics-tab" data-toggle="pill" data-target="#v-pills-electronics" type="button" role="tab" aria-controls="v-pills-electronics" aria-selected="false">School of Electrical & Electronic</button>
                    <button class="nav-link text-left border-0 p-3" id="v-pills-Hospitality-tab" data-toggle="pill" data-target="#v-pills-Hospitality" type="button" role="tab" aria-controls="v-pills-Hospitality" aria-selected="false">School of Hospitality & Services</button>
                    <button class="nav-link text-left border-0 p-3" id="v-pills-furniture-tab" data-toggle="pill" data-target="#v-pills-furniture" type="button" role="tab" aria-controls="v-pills-furniture" aria-selected="false">School of Furniture Design & Technology</button>
                    <button class="nav-link text-left border-0 p-3" id="v-pills-Automotive-tab" data-toggle="pill" data-target="#v-pills-Automotive" type="button" role="tab" aria-controls="v-pills-Automotive" aria-selected="false">School of Automotive & Agriculture Machinery</button>
                    <button class="nav-link text-left border-0 p-3" id="v-pills-Mechanical-tab" data-toggle="pill" data-target="#v-pills-Mechanical" type="button" role="tab" aria-controls="v-pills-Mechanical" aria-selected="false">School of Mechanical & Manufacturing</button>
                    <button class="nav-link text-left border-0 p-3" id="v-pills-Printing-tab" data-toggle="pill" data-target="#v-pills-Printing" type="button" role="tab" aria-controls="v-pills-Printing" aria-selected="false">School of Publications/Printing</button>
                    <button class="nav-link text-left border-0 p-3" id="v-pills-Health-tab" data-toggle="pill" data-target="#v-pills-Health" type="button" role="tab" aria-controls="v-pills-Health" aria-selected="false">School of Allied Health</button>
                    <button class="nav-link text-left border-0 p-3" id="v-pills-Computer-tab" data-toggle="pill" data-target="#v-pills-Computer" type="button" role="tab" aria-controls="v-pills-Computer" aria-selected="false">School of IT/Computer</button>
                    <button class="nav-link text-left border-0 p-3" id="v-pills-Garments-tab" data-toggle="pill" data-target="#v-pills-Garments" type="button" role="tab" aria-controls="v-pills-Garments" aria-selected="false">School of Textile/Garments</button>
                </div>
            </div>
            <div class=" col-12 col-sm-9 bg-light rounded">
                <div class="tab-content" id="v-pills-tabContent">

                    <div class="tab-pane fade show active" id="v-pills-civil" role="tabpanel" aria-labelledby="v-pills-civil-tab">
                        <nav>
                            <div class="nav nav-pills nav-fill" id="nav-tab" role="tablist">
                                <button class="nav-link border-0 active" id="nav-Architecture-tab" data-toggle="tab" data-target="#nav-Architecture" type="button" role="tab" aria-controls="nav-Architecture" aria-selected="true">Architecture</button>
                                <button class="nav-link border-0" id="nav-Civil-tab" data-toggle="tab" data-target="#nav-Civil" type="button" role="tab" aria-controls="nav-Civil" aria-selected="false">Civil</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show p-2 active" id="nav-Architecture" role="tabpanel" aria-labelledby="nav-Architecture-tab">
                                <div class="course-inner">
                                    <img src="{{asset('assets/images/lion.jpeg')}}" alt="" class="w-100">
                                    <div class="overview-outer">
                                        <h5 class="text-left mt-5">Course Overview</h5>
                                        <p class="mt-3">This course is for those people who are unemployeed and have no skills. We are here to give you skills after completing this course you are gonna hire by some company or start your own business. </p>
                                    </div>
                                    <div class="Eligibility-outer">
                                        <h5 class="text-left mt-5">Eligibility Criteria</h5>
                                        <ol class="text-left mt-3 ml-3">
                                            <li class="pl-2 my-2">Must be a citizen of Pakistan/AJ&K with age between 15-40 years.</li>
                                            <li class="pl-2 my-2">Any false information on the Application Form may render the student liable to expulsion from the Institute.</li>
                                            <li class="pl-2 my-2">The candidate will be selected by the Admission Committee of an Institute. The decisions of the Admission Committee in respect of selection and admission shall be final.</li>
                                            <li class="pl-2 my-2">After admission, the applicant will not be allowed to change his/her discipline and to claim exemption of tuition fee and other dues.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the fee (if applicable) on the due date.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the Attested Copies of Complete Academic Certificates, NIC, and Four passport size photographs.</li>
                                        </ol>
                                    </div>
                                    <div class="curriculum-outer">
                                        <h5 class="text-left mt-5">curriculum</h5>
                                        <p class="mt-3">The course contains the following subjects and there time period:</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-Civil" role="tabpanel" aria-labelledby="nav-Civil-tab">
                                <div class="course-inner">
                                    <img src="{{asset('assets/images/lion.jpeg')}}" alt="" class="w-100">
                                    <div class="overview-outer">
                                        <h5 class="text-left mt-5">Course Overview</h5>
                                        <p class="mt-3">This course is for those people who are unemployeed and have no skills. We are here to give you skills after completing this course you are gonna hire by some company or start your own business. </p>
                                    </div>
                                    <div class="Eligibility-outer">
                                        <h5 class="text-left mt-5">Eligibility Criteria</h5>
                                        <ol class="text-left mt-3 ml-3">
                                            <li class="pl-2 my-2">Must be a citizen of Pakistan/AJ&K with age between 15-40 years.</li>
                                            <li class="pl-2 my-2">Any false information on the Application Form may render the student liable to expulsion from the Institute.</li>
                                            <li class="pl-2 my-2">The candidate will be selected by the Admission Committee of an Institute. The decisions of the Admission Committee in respect of selection and admission shall be final.</li>
                                            <li class="pl-2 my-2">After admission, the applicant will not be allowed to change his/her discipline and to claim exemption of tuition fee and other dues.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the fee (if applicable) on the due date.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the Attested Copies of Complete Academic Certificates, NIC, and Four passport size photographs.</li>
                                        </ol>
                                    </div>
                                    <div class="curriculum-outer">
                                        <h5 class="text-left mt-5">curriculum</h5>
                                        <p class="mt-3">The course contains the following subjects and there time period:</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-petrol" role="tabpanel" aria-labelledby="v-pills-petrol-tab">
                        <nav>
                            <div class="nav nav-pills nav-fill" id="nav-tab" role="tablist">
                                <button class="nav-link border-0 active" id="nav-Chemical-tab" data-toggle="tab" data-target="#nav-Chemical" type="button" role="tab" aria-controls="nav-Chemical" aria-selected="true">Chemical</button>
                                <button class="nav-link border-0" id="nav-Specialization-In-Sugar-tab" data-toggle="tab" data-target="#nav-Specialization-In-Sugar" type="button" role="tab" aria-controls="nav-Specialization-In-Sugar" aria-selected="false">Specialization In Sugar</button>
                                <button class="nav-link border-0" id="nav-Petro-chemical-tab" data-toggle="tab" data-target="#nav-Petro-chemical" type="button" role="tab" aria-controls="nav-Petro-chemical" aria-selected="true">Petro-chemical</button>
                                <button class="nav-link border-0" id="nav-Petroleum-tab" data-toggle="tab" data-target="#nav-Petroleum" type="button" role="tab" aria-controls="nav-Petroleum" aria-selected="true">Petroleum</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-Chemical" role="tabpanel" aria-labelledby="nav-Chemical-tab">
                                <div class="course-inner">
                                    <img src="{{asset('assets/images/lion.jpeg')}}" alt="" class="w-100">
                                    <div class="overview-outer">
                                        <h5 class="text-left mt-5">Course Overview</h5>
                                        <p class="mt-3">This course is for those people who are unemployeed and have no skills. We are here to give you skills after completing this course you are gonna hire by some company or start your own business. </p>
                                    </div>
                                    <div class="Eligibility-outer">
                                        <h5 class="text-left mt-5">Eligibility Criteria</h5>
                                        <ol class="text-left mt-3 ml-3">
                                            <li class="pl-2 my-2">Must be a citizen of Pakistan/AJ&K with age between 15-40 years.</li>
                                            <li class="pl-2 my-2">Any false information on the Application Form may render the student liable to expulsion from the Institute.</li>
                                            <li class="pl-2 my-2">The candidate will be selected by the Admission Committee of an Institute. The decisions of the Admission Committee in respect of selection and admission shall be final.</li>
                                            <li class="pl-2 my-2">After admission, the applicant will not be allowed to change his/her discipline and to claim exemption of tuition fee and other dues.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the fee (if applicable) on the due date.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the Attested Copies of Complete Academic Certificates, NIC, and Four passport size photographs.</li>
                                        </ol>
                                    </div>
                                    <div class="curriculum-outer">
                                        <h5 class="text-left mt-5">curriculum</h5>
                                        <p class="mt-3">The course contains the following subjects and there time period:</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-Specialization-In-Sugar" role="tabpanel" aria-labelledby="nav-Specialization-In-Sugar-tab">
                                <div class="course-inner">
                                    <img src="{{asset('assets/images/lion.jpeg')}}" alt="" class="w-100">
                                    <div class="overview-outer">
                                        <h5 class="text-left mt-5">Course Overview</h5>
                                        <p class="mt-3">This course is for those people who are unemployeed and have no skills. We are here to give you skills after completing this course you are gonna hire by some company or start your own business. </p>
                                    </div>
                                    <div class="Eligibility-outer">
                                        <h5 class="text-left mt-5">Eligibility Criteria</h5>
                                        <ol class="text-left mt-3 ml-3">
                                            <li class="pl-2 my-2">Must be a citizen of Pakistan/AJ&K with age between 15-40 years.</li>
                                            <li class="pl-2 my-2">Any false information on the Application Form may render the student liable to expulsion from the Institute.</li>
                                            <li class="pl-2 my-2">The candidate will be selected by the Admission Committee of an Institute. The decisions of the Admission Committee in respect of selection and admission shall be final.</li>
                                            <li class="pl-2 my-2">After admission, the applicant will not be allowed to change his/her discipline and to claim exemption of tuition fee and other dues.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the fee (if applicable) on the due date.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the Attested Copies of Complete Academic Certificates, NIC, and Four passport size photographs.</li>
                                        </ol>
                                    </div>
                                    <div class="curriculum-outer">
                                        <h5 class="text-left mt-5">curriculum</h5>
                                        <p class="mt-3">The course contains the following subjects and there time period:</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show " id="nav-Petro-chemical" role="tabpanel" aria-labelledby="nav-Petro-chemical-tab">
                                <div class="course-inner">
                                    <img src="{{asset('assets/images/lion.jpeg')}}" alt="" class="w-100">
                                    <div class="overview-outer">
                                        <h5 class="text-left mt-5">Course Overview</h5>
                                        <p class="mt-3">This course is for those people who are unemployeed and have no skills. We are here to give you skills after completing this course you are gonna hire by some company or start your own business. </p>
                                    </div>
                                    <div class="Eligibility-outer">
                                        <h5 class="text-left mt-5">Eligibility Criteria</h5>
                                        <ol class="text-left mt-3 ml-3">
                                            <li class="pl-2 my-2">Must be a citizen of Pakistan/AJ&K with age between 15-40 years.</li>
                                            <li class="pl-2 my-2">Any false information on the Application Form may render the student liable to expulsion from the Institute.</li>
                                            <li class="pl-2 my-2">The candidate will be selected by the Admission Committee of an Institute. The decisions of the Admission Committee in respect of selection and admission shall be final.</li>
                                            <li class="pl-2 my-2">After admission, the applicant will not be allowed to change his/her discipline and to claim exemption of tuition fee and other dues.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the fee (if applicable) on the due date.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the Attested Copies of Complete Academic Certificates, NIC, and Four passport size photographs.</li>
                                        </ol>
                                    </div>
                                    <div class="curriculum-outer">
                                        <h5 class="text-left mt-5">curriculum</h5>
                                        <p class="mt-3">The course contains the following subjects and there time period:</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show " id="nav-Petroleum" role="tabpanel" aria-labelledby="nav-Petroleum-tab">
                                <div class="course-inner">
                                    <img src="{{asset('assets/images/lion.jpeg')}}" alt="" class="w-100">
                                    <div class="overview-outer">
                                        <h5 class="text-left mt-5">Course Overview</h5>
                                        <p class="mt-3">This course is for those people who are unemployeed and have no skills. We are here to give you skills after completing this course you are gonna hire by some company or start your own business. </p>
                                    </div>
                                    <div class="Eligibility-outer">
                                        <h5 class="text-left mt-5">Eligibility Criteria</h5>
                                        <ol class="text-left mt-3 ml-3">
                                            <li class="pl-2 my-2">Must be a citizen of Pakistan/AJ&K with age between 15-40 years.</li>
                                            <li class="pl-2 my-2">Any false information on the Application Form may render the student liable to expulsion from the Institute.</li>
                                            <li class="pl-2 my-2">The candidate will be selected by the Admission Committee of an Institute. The decisions of the Admission Committee in respect of selection and admission shall be final.</li>
                                            <li class="pl-2 my-2">After admission, the applicant will not be allowed to change his/her discipline and to claim exemption of tuition fee and other dues.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the fee (if applicable) on the due date.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the Attested Copies of Complete Academic Certificates, NIC, and Four passport size photographs.</li>
                                        </ol>
                                    </div>
                                    <div class="curriculum-outer">
                                        <h5 class="text-left mt-5">curriculum</h5>
                                        <p class="mt-3">The course contains the following subjects and there time period:</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-electronics" role="tabpanel" aria-labelledby="v-pills-electronics-tab">
                        <nav>
                            <div class="nav nav-pills nav-fill" id="nav-tab" role="tablist">
                                <button class="nav-link border-0 active" id="nav-Electrical-tab" data-toggle="tab" data-target="#nav-Electrical" type="button" role="tab" aria-controls="nav-Electrical" aria-selected="true">Electrical</button>
                                <button class="nav-link border-0" id="nav-Electronics-tech-tab" data-toggle="tab" data-target="#nav-Electronics-tech" type="button" role="tab" aria-controls="nav-Electronics-tech" aria-selected="false">Electronics</button>
                                <button class="nav-link border-0" id="nav-Instrumentation-tab" data-toggle="tab" data-target="#nav-Instrumentation" type="button" role="tab" aria-controls="nav-Instrumentation" aria-selected="true">Instrumentation</button>
                                <button class="nav-link border-0" id="nav-Telecommunication-tab" data-toggle="tab" data-target="#nav-Telecommunication" type="button" role="tab" aria-controls="nav-Telecommunication" aria-selected="true">Telecommunication</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-Electrical" role="tabpanel" aria-labelledby="nav-Electrical-tab">
                                <div class="course-inner">
                                    <img src="{{asset('assets/images/lion.jpeg')}}" alt="" class="w-100">
                                    <div class="overview-outer">
                                        <h5 class="text-left mt-5">Course Overview</h5>
                                        <p class="mt-3">This course is for those people who are unemployeed and have no skills. We are here to give you skills after completing this course you are gonna hire by some company or start your own business. </p>
                                    </div>
                                    <div class="Eligibility-outer">
                                        <h5 class="text-left mt-5">Eligibility Criteria</h5>
                                        <ol class="text-left mt-3 ml-3">
                                            <li class="pl-2 my-2">Must be a citizen of Pakistan/AJ&K with age between 15-40 years.</li>
                                            <li class="pl-2 my-2">Any false information on the Application Form may render the student liable to expulsion from the Institute.</li>
                                            <li class="pl-2 my-2">The candidate will be selected by the Admission Committee of an Institute. The decisions of the Admission Committee in respect of selection and admission shall be final.</li>
                                            <li class="pl-2 my-2">After admission, the applicant will not be allowed to change his/her discipline and to claim exemption of tuition fee and other dues.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the fee (if applicable) on the due date.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the Attested Copies of Complete Academic Certificates, NIC, and Four passport size photographs.</li>
                                        </ol>
                                    </div>
                                    <div class="curriculum-outer">
                                        <h5 class="text-left mt-5">curriculum</h5>
                                        <p class="mt-3">The course contains the following subjects and there time period:</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-Electronics-tech" role="tabpanel" aria-labelledby="nav-Electronics-tech-tab">
                                <div class="course-inner">
                                    <img src="{{asset('assets/images/lion.jpeg')}}" alt="" class="w-100">
                                    <div class="overview-outer">
                                        <h5 class="text-left mt-5">Course Overview</h5>
                                        <p class="mt-3">This course is for those people who are unemployeed and have no skills. We are here to give you skills after completing this course you are gonna hire by some company or start your own business. </p>
                                    </div>
                                    <div class="Eligibility-outer">
                                        <h5 class="text-left mt-5">Eligibility Criteria</h5>
                                        <ol class="text-left mt-3 ml-3">
                                            <li class="pl-2 my-2">Must be a citizen of Pakistan/AJ&K with age between 15-40 years.</li>
                                            <li class="pl-2 my-2">Any false information on the Application Form may render the student liable to expulsion from the Institute.</li>
                                            <li class="pl-2 my-2">The candidate will be selected by the Admission Committee of an Institute. The decisions of the Admission Committee in respect of selection and admission shall be final.</li>
                                            <li class="pl-2 my-2">After admission, the applicant will not be allowed to change his/her discipline and to claim exemption of tuition fee and other dues.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the fee (if applicable) on the due date.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the Attested Copies of Complete Academic Certificates, NIC, and Four passport size photographs.</li>
                                        </ol>
                                    </div>
                                    <div class="curriculum-outer">
                                        <h5 class="text-left mt-5">curriculum</h5>
                                        <p class="mt-3">The course contains the following subjects and there time period:</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show " id="nav-Instrumentation" role="tabpanel" aria-labelledby="nav-Instrumentation-tab">
                                <div class="course-inner">
                                    <img src="{{asset('assets/images/lion.jpeg')}}" alt="" class="w-100">
                                    <div class="overview-outer">
                                        <h5 class="text-left mt-5">Course Overview</h5>
                                        <p class="mt-3">This course is for those people who are unemployeed and have no skills. We are here to give you skills after completing this course you are gonna hire by some company or start your own business. </p>
                                    </div>
                                    <div class="Eligibility-outer">
                                        <h5 class="text-left mt-5">Eligibility Criteria</h5>
                                        <ol class="text-left mt-3 ml-3">
                                            <li class="pl-2 my-2">Must be a citizen of Pakistan/AJ&K with age between 15-40 years.</li>
                                            <li class="pl-2 my-2">Any false information on the Application Form may render the student liable to expulsion from the Institute.</li>
                                            <li class="pl-2 my-2">The candidate will be selected by the Admission Committee of an Institute. The decisions of the Admission Committee in respect of selection and admission shall be final.</li>
                                            <li class="pl-2 my-2">After admission, the applicant will not be allowed to change his/her discipline and to claim exemption of tuition fee and other dues.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the fee (if applicable) on the due date.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the Attested Copies of Complete Academic Certificates, NIC, and Four passport size photographs.</li>
                                        </ol>
                                    </div>
                                    <div class="curriculum-outer">
                                        <h5 class="text-left mt-5">curriculum</h5>
                                        <p class="mt-3">The course contains the following subjects and there time period:</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show " id="nav-Telecommunication" role="tabpanel" aria-labelledby="nav-Telecommunication-tab">
                                <div class="course-inner">
                                    <img src="{{asset('assets/images/lion.jpeg')}}" alt="" class="w-100">
                                    <div class="overview-outer">
                                        <h5 class="text-left mt-5">Course Overview</h5>
                                        <p class="mt-3">This course is for those people who are unemployeed and have no skills. We are here to give you skills after completing this course you are gonna hire by some company or start your own business. </p>
                                    </div>
                                    <div class="Eligibility-outer">
                                        <h5 class="text-left mt-5">Eligibility Criteria</h5>
                                        <ol class="text-left mt-3 ml-3">
                                            <li class="pl-2 my-2">Must be a citizen of Pakistan/AJ&K with age between 15-40 years.</li>
                                            <li class="pl-2 my-2">Any false information on the Application Form may render the student liable to expulsion from the Institute.</li>
                                            <li class="pl-2 my-2">The candidate will be selected by the Admission Committee of an Institute. The decisions of the Admission Committee in respect of selection and admission shall be final.</li>
                                            <li class="pl-2 my-2">After admission, the applicant will not be allowed to change his/her discipline and to claim exemption of tuition fee and other dues.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the fee (if applicable) on the due date.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the Attested Copies of Complete Academic Certificates, NIC, and Four passport size photographs.</li>
                                        </ol>
                                    </div>
                                    <div class="curriculum-outer">
                                        <h5 class="text-left mt-5">curriculum</h5>
                                        <p class="mt-3">The course contains the following subjects and there time period:</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-Hospitality" role="tabpanel" aria-labelledby="v-pills-Hospitality-tab">
                        <nav>
                            <div class="nav nav-pills nav-fill" id="nav-tab" role="tablist">
                                <button class="nav-link border-0 active" id="nav-Food-tab" data-toggle="tab" data-target="#nav-Food" type="button" role="tab" aria-controls="nav-Food" aria-selected="true">Food</button>
                                <button class="nav-link border-0" id="nav-Food-Processing-tab" data-toggle="tab" data-target="#nav-Food-Processing" type="button" role="tab" aria-controls="nav-Food-Processing" aria-selected="false">Food Processing & Preservation</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-Food" role="tabpanel" aria-labelledby="nav-Food-tab">
                                <img src="{{asset('assets/images/lion.jpeg')}}" alt="" class="w-100">
                                <div class="overview-outer">
                                    <h5 class="text-left mt-5">Course Overview</h5>
                                    <p class="mt-3">This course is for those people who are unemployeed and have no skills. We are here to give you skills after completing this course you are gonna hire by some company or start your own business. </p>
                                </div>
                                <div class="Eligibility-outer">
                                    <h5 class="text-left mt-5">Eligibility Criteria</h5>
                                    <ol class="text-left mt-3 ml-3">
                                        <li class="pl-2 my-2">Must be a citizen of Pakistan/AJ&K with age between 15-40 years.</li>
                                        <li class="pl-2 my-2">Any false information on the Application Form may render the student liable to expulsion from the Institute.</li>
                                        <li class="pl-2 my-2">The candidate will be selected by the Admission Committee of an Institute. The decisions of the Admission Committee in respect of selection and admission shall be final.</li>
                                        <li class="pl-2 my-2">After admission, the applicant will not be allowed to change his/her discipline and to claim exemption of tuition fee and other dues.</li>
                                        <li class="pl-2 my-2">The candidate must have to submit the fee (if applicable) on the due date.</li>
                                        <li class="pl-2 my-2">The candidate must have to submit the Attested Copies of Complete Academic Certificates, NIC, and Four passport size photographs.</li>
                                    </ol>
                                </div>
                                <div class="curriculum-outer">
                                    <h5 class="text-left mt-5">curriculum</h5>
                                    <p class="mt-3">The course contains the following subjects and there time period:</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-Food-Processing" role="tabpanel" aria-labelledby="nav-Food-Processing-tab">
                                <img src="{{asset('assets/images/lion.jpeg')}}" alt="" class="w-100">
                                <div class="overview-outer">
                                    <h5 class="text-left mt-5">Course Overview</h5>
                                    <p class="mt-3">This course is for those people who are unemployeed and have no skills. We are here to give you skills after completing this course you are gonna hire by some company or start your own business. </p>
                                </div>
                                <div class="Eligibility-outer">
                                    <h5 class="text-left mt-5">Eligibility Criteria</h5>
                                    <ol class="text-left mt-3 ml-3">
                                        <li class="pl-2 my-2">Must be a citizen of Pakistan/AJ&K with age between 15-40 years.</li>
                                        <li class="pl-2 my-2">Any false information on the Application Form may render the student liable to expulsion from the Institute.</li>
                                        <li class="pl-2 my-2">The candidate will be selected by the Admission Committee of an Institute. The decisions of the Admission Committee in respect of selection and admission shall be final.</li>
                                        <li class="pl-2 my-2">After admission, the applicant will not be allowed to change his/her discipline and to claim exemption of tuition fee and other dues.</li>
                                        <li class="pl-2 my-2">The candidate must have to submit the fee (if applicable) on the due date.</li>
                                        <li class="pl-2 my-2">The candidate must have to submit the Attested Copies of Complete Academic Certificates, NIC, and Four passport size photographs.</li>
                                    </ol>
                                </div>
                                <div class="curriculum-outer">
                                    <h5 class="text-left mt-5">curriculum</h5>
                                    <p class="mt-3">The course contains the following subjects and there time period:</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-furniture" role="tabpanel" aria-labelledby="v-pills-furniture-tab">
                        <nav>
                            <div class="nav nav-pills nav-fill" id="nav-tab" role="tablist">
                                <button class="nav-link border-0 active" id="nav-Furniture-Design-tab" data-toggle="tab" data-target="#nav-Furniture-Design" type="button" role="tab" aria-controls="nav-Furniture-Design" aria-selected="true">Furniture Design</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-Furniture-Design" role="tabpanel" aria-labelledby="nav-Furniture-Design-tab">
                                <div class="course-inner">
                                    <img src="{{asset('assets/images/lion.jpeg')}}" alt="" class="w-100">
                                    <div class="overview-outer">
                                        <h5 class="text-left mt-5">Course Overview</h5>
                                        <p class="mt-3">This course is for those people who are unemployeed and have no skills. We are here to give you skills after completing this course you are gonna hire by some company or start your own business. </p>
                                    </div>
                                    <div class="Eligibility-outer">
                                        <h5 class="text-left mt-5">Eligibility Criteria</h5>
                                        <ol class="text-left mt-3 ml-3">
                                            <li class="pl-2 my-2">Must be a citizen of Pakistan/AJ&K with age between 15-40 years.</li>
                                            <li class="pl-2 my-2">Any false information on the Application Form may render the student liable to expulsion from the Institute.</li>
                                            <li class="pl-2 my-2">The candidate will be selected by the Admission Committee of an Institute. The decisions of the Admission Committee in respect of selection and admission shall be final.</li>
                                            <li class="pl-2 my-2">After admission, the applicant will not be allowed to change his/her discipline and to claim exemption of tuition fee and other dues.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the fee (if applicable) on the due date.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the Attested Copies of Complete Academic Certificates, NIC, and Four passport size photographs.</li>
                                        </ol>
                                    </div>
                                    <div class="curriculum-outer">
                                        <h5 class="text-left mt-5">curriculum</h5>
                                        <p class="mt-3">The course contains the following subjects and there time period:</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-Automotive" role="tabpanel" aria-labelledby="v-pills-Automotive-tab">
                        <nav>
                            <div class="nav nav-pills nav-fill" id="nav-tab" role="tablist">
                                <button class="nav-link border-0 active" id="nav-Auto-Farm-Machinery-tab" data-toggle="tab" data-target="#nav-Auto-Farm-Machinery" type="button" role="tab" aria-controls="nav-Auto-Farm-Machinery" aria-selected="true">Auto-&-Farm-Machinery</button>
                                <button class="nav-link border-0" id="nav-Foundry-&-Pattern-Making-tab" data-toggle="tab" data-target="#nav-Foundry-Pattern-Making" type="button" role="tab" aria-controls="nav-Foundry-Pattern-Making" aria-selected="falseFoundry-Pattern-Making ">Foundry & Pattern Making</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-Auto-Farm-Machinery" role="tabpanel" aria-labelledby="nav-Auto-Farm-Machinery-tab">
                                <img src="{{asset('assets/images/lion.jpeg')}}" alt="" class="w-100">
                                <div class="overview-outer">
                                    <h5 class="text-left mt-5">Course Overview</h5>
                                    <p class="mt-3">This course is for those people who are unemployeed and have no skills. We are here to give you skills after completing this course you are gonna hire by some company or start your own business. </p>
                                </div>
                                <div class="Eligibility-outer">
                                    <h5 class="text-left mt-5">Eligibility Criteria</h5>
                                    <ol class="text-left mt-3 ml-3">
                                        <li class="pl-2 my-2">Must be a citizen of Pakistan/AJ&K with age between 15-40 years.</li>
                                        <li class="pl-2 my-2">Any false information on the Application Form may render the student liable to expulsion from the Institute.</li>
                                        <li class="pl-2 my-2">The candidate will be selected by the Admission Committee of an Institute. The decisions of the Admission Committee in respect of selection and admission shall be final.</li>
                                        <li class="pl-2 my-2">After admission, the applicant will not be allowed to change his/her discipline and to claim exemption of tuition fee and other dues.</li>
                                        <li class="pl-2 my-2">The candidate must have to submit the fee (if applicable) on the due date.</li>
                                        <li class="pl-2 my-2">The candidate must have to submit the Attested Copies of Complete Academic Certificates, NIC, and Four passport size photographs.</li>
                                    </ol>
                                </div>
                                <div class="curriculum-outer">
                                    <h5 class="text-left mt-5">curriculum</h5>
                                    <p class="mt-3">The course contains the following subjects and there time period:</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-Foundry-Pattern-Making" role="tabpanel" aria-labelledby="nav-Foundry-Pattern-Making-tab">
                                <img src="{{asset('assets/images/lion.jpeg')}}" alt="" class="w-100">
                                <div class="overview-outer">
                                    <h5 class="text-left mt-5">Course Overview</h5>
                                    <p class="mt-3">This course is for those people who are unemployeed and have no skills. We are here to give you skills after completing this course you are gonna hire by some company or start your own business. </p>
                                </div>
                                <div class="Eligibility-outer">
                                    <h5 class="text-left mt-5">Eligibility Criteria</h5>
                                    <ol class="text-left mt-3 ml-3">
                                        <li class="pl-2 my-2">Must be a citizen of Pakistan/AJ&K with age between 15-40 years.</li>
                                        <li class="pl-2 my-2">Any false information on the Application Form may render the student liable to expulsion from the Institute.</li>
                                        <li class="pl-2 my-2">The candidate will be selected by the Admission Committee of an Institute. The decisions of the Admission Committee in respect of selection and admission shall be final.</li>
                                        <li class="pl-2 my-2">After admission, the applicant will not be allowed to change his/her discipline and to claim exemption of tuition fee and other dues.</li>
                                        <li class="pl-2 my-2">The candidate must have to submit the fee (if applicable) on the due date.</li>
                                        <li class="pl-2 my-2">The candidate must have to submit the Attested Copies of Complete Academic Certificates, NIC, and Four passport size photographs.</li>
                                    </ol>
                                </div>
                                <div class="curriculum-outer">
                                    <h5 class="text-left mt-5">curriculum</h5>
                                    <p class="mt-3">The course contains the following subjects and there time period:</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-Mechanical" role="tabpanel" aria-labelledby="v-pills-Mechanical-tab">
                        <nav>
                            <div class="nav nav-pills nav-fill" id="nav-tab" role="tablist">
                                <button class="nav-link border-0 active" id="nav-Automation-tab" data-toggle="tab" data-target="#nav-Automation" type="button" role="tab" aria-controls="nav-Automation" aria-selected="true">Automation</button>
                                <button class="nav-link border-0" id="nav-Mechanical-tech-tab" data-toggle="tab" data-target="#nav-Mechanical-tech" type="button" role="tab" aria-controls="nav-Mechanical-tech" aria-selected="false">Mechanical-tech</button>
                                <button class="nav-link border-0" id="nav-Metallurgy-Welding-tab" data-toggle="tab" data-target="#nav-Metallurgy-Welding" type="button" role="tab" aria-controls="nav-Metallurgy-Welding" aria-selected="true">Metallurgy-&-Welding</button>
                                <button class="nav-link border-0" id="nav-Automobile-Diesel-tab" data-toggle="tab" data-target="#nav-Automobile-Diesel" type="button" role="tab" aria-controls="nav-Automobile-Diesel" aria-selected="true">Automobile-&-Diesel</button>
                                <button class="nav-link border-0" id="nav-Mechatronics-tab" data-toggle="tab" data-target="#nav-Mechatronics" type="button" role="tab" aria-controls="nav-Mechatronics" aria-selected="true">Mechatronics</button>
                                <button class="nav-link border-0" id="nav-special-in-HVACR-tab" data-toggle="tab" data-target="#nav-special-in-HVACR" type="button" role="tab" aria-controls="nav-special-in-HVACR" aria-selected="true">special-in-HVACR</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-Automation" role="tabpanel" aria-labelledby="nav-Automation-tab">
                                <div class="course-inner">
                                    <img src="{{asset('assets/images/lion.jpeg')}}" alt="" class="w-100">
                                    <div class="overview-outer">
                                        <h5 class="text-left mt-5">Course Overview</h5>
                                        <p class="mt-3">This course is for those people who are unemployeed and have no skills. We are here to give you skills after completing this course you are gonna hire by some company or start your own business. </p>
                                    </div>
                                    <div class="Eligibility-outer">
                                        <h5 class="text-left mt-5">Eligibility Criteria</h5>
                                        <ol class="text-left mt-3 ml-3">
                                            <li class="pl-2 my-2">Must be a citizen of Pakistan/AJ&K with age between 15-40 years.</li>
                                            <li class="pl-2 my-2">Any false information on the Application Form may render the student liable to expulsion from the Institute.</li>
                                            <li class="pl-2 my-2">The candidate will be selected by the Admission Committee of an Institute. The decisions of the Admission Committee in respect of selection and admission shall be final.</li>
                                            <li class="pl-2 my-2">After admission, the applicant will not be allowed to change his/her discipline and to claim exemption of tuition fee and other dues.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the fee (if applicable) on the due date.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the Attested Copies of Complete Academic Certificates, NIC, and Four passport size photographs.</li>
                                        </ol>
                                    </div>
                                    <div class="curriculum-outer">
                                        <h5 class="text-left mt-5">curriculum</h5>
                                        <p class="mt-3">The course contains the following subjects and there time period:</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-Mechanical-tech" role="tabpanel" aria-labelledby="nav-Mechanical-tech-tab">
                                <div class="course-inner">
                                    <img src="{{asset('assets/images/lion.jpeg')}}" alt="" class="w-100">
                                    <div class="overview-outer">
                                        <h5 class="text-left mt-5">Course Overview</h5>
                                        <p class="mt-3">This course is for those people who are unemployeed and have no skills. We are here to give you skills after completing this course you are gonna hire by some company or start your own business. </p>
                                    </div>
                                    <div class="Eligibility-outer">
                                        <h5 class="text-left mt-5">Eligibility Criteria</h5>
                                        <ol class="text-left mt-3 ml-3">
                                            <li class="pl-2 my-2">Must be a citizen of Pakistan/AJ&K with age between 15-40 years.</li>
                                            <li class="pl-2 my-2">Any false information on the Application Form may render the student liable to expulsion from the Institute.</li>
                                            <li class="pl-2 my-2">The candidate will be selected by the Admission Committee of an Institute. The decisions of the Admission Committee in respect of selection and admission shall be final.</li>
                                            <li class="pl-2 my-2">After admission, the applicant will not be allowed to change his/her discipline and to claim exemption of tuition fee and other dues.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the fee (if applicable) on the due date.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the Attested Copies of Complete Academic Certificates, NIC, and Four passport size photographs.</li>
                                        </ol>
                                    </div>
                                    <div class="curriculum-outer">
                                        <h5 class="text-left mt-5">curriculum</h5>
                                        <p class="mt-3">The course contains the following subjects and there time period:</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show " id="nav-Metallurgy-Welding" role="tabpanel" aria-labelledby="nav-Metallurgy-Welding-tab">
                                <div class="course-inner">
                                    <img src="{{asset('assets/images/lion.jpeg')}}" alt="" class="w-100">
                                    <div class="overview-outer">
                                        <h5 class="text-left mt-5">Course Overview</h5>
                                        <p class="mt-3">This course is for those people who are unemployeed and have no skills. We are here to give you skills after completing this course you are gonna hire by some company or start your own business. </p>
                                    </div>
                                    <div class="Eligibility-outer">
                                        <h5 class="text-left mt-5">Eligibility Criteria</h5>
                                        <ol class="text-left mt-3 ml-3">
                                            <li class="pl-2 my-2">Must be a citizen of Pakistan/AJ&K with age between 15-40 years.</li>
                                            <li class="pl-2 my-2">Any false information on the Application Form may render the student liable to expulsion from the Institute.</li>
                                            <li class="pl-2 my-2">The candidate will be selected by the Admission Committee of an Institute. The decisions of the Admission Committee in respect of selection and admission shall be final.</li>
                                            <li class="pl-2 my-2">After admission, the applicant will not be allowed to change his/her discipline and to claim exemption of tuition fee and other dues.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the fee (if applicable) on the due date.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the Attested Copies of Complete Academic Certificates, NIC, and Four passport size photographs.</li>
                                        </ol>
                                    </div>
                                    <div class="curriculum-outer">
                                        <h5 class="text-left mt-5">curriculum</h5>
                                        <p class="mt-3">The course contains the following subjects and there time period:</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show " id="nav-Automobile-Diesel" role="tabpanel" aria-labelledby="nav-Automobile-Diesel-tab">
                                <div class="course-inner">
                                    <img src="{{asset('assets/images/lion.jpeg')}}" alt="" class="w-100">
                                    <div class="overview-outer">
                                        <h5 class="text-left mt-5">Course Overview</h5>
                                        <p class="mt-3">This course is for those people who are unemployeed and have no skills. We are here to give you skills after completing this course you are gonna hire by some company or start your own business. </p>
                                    </div>
                                    <div class="Eligibility-outer">
                                        <h5 class="text-left mt-5">Eligibility Criteria</h5>
                                        <ol class="text-left mt-3 ml-3">
                                            <li class="pl-2 my-2">Must be a citizen of Pakistan/AJ&K with age between 15-40 years.</li>
                                            <li class="pl-2 my-2">Any false information on the Application Form may render the student liable to expulsion from the Institute.</li>
                                            <li class="pl-2 my-2">The candidate will be selected by the Admission Committee of an Institute. The decisions of the Admission Committee in respect of selection and admission shall be final.</li>
                                            <li class="pl-2 my-2">After admission, the applicant will not be allowed to change his/her discipline and to claim exemption of tuition fee and other dues.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the fee (if applicable) on the due date.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the Attested Copies of Complete Academic Certificates, NIC, and Four passport size photographs.</li>
                                        </ol>
                                    </div>
                                    <div class="curriculum-outer">
                                        <h5 class="text-left mt-5">curriculum</h5>
                                        <p class="mt-3">The course contains the following subjects and there time period:</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show " id="nav-Mechatronics" role="tabpanel" aria-labelledby="nav-Mechatronics-tab">
                                <div class="course-inner">
                                    <img src="{{asset('assets/images/lion.jpeg')}}" alt="" class="w-100">
                                    <div class="overview-outer">
                                        <h5 class="text-left mt-5">Course Overview</h5>
                                        <p class="mt-3">This course is for those people who are unemployeed and have no skills. We are here to give you skills after completing this course you are gonna hire by some company or start your own business. </p>
                                    </div>
                                    <div class="Eligibility-outer">
                                        <h5 class="text-left mt-5">Eligibility Criteria</h5>
                                        <ol class="text-left mt-3 ml-3">
                                            <li class="pl-2 my-2">Must be a citizen of Pakistan/AJ&K with age between 15-40 years.</li>
                                            <li class="pl-2 my-2">Any false information on the Application Form may render the student liable to expulsion from the Institute.</li>
                                            <li class="pl-2 my-2">The candidate will be selected by the Admission Committee of an Institute. The decisions of the Admission Committee in respect of selection and admission shall be final.</li>
                                            <li class="pl-2 my-2">After admission, the applicant will not be allowed to change his/her discipline and to claim exemption of tuition fee and other dues.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the fee (if applicable) on the due date.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the Attested Copies of Complete Academic Certificates, NIC, and Four passport size photographs.</li>
                                        </ol>
                                    </div>
                                    <div class="curriculum-outer">
                                        <h5 class="text-left mt-5">curriculum</h5>
                                        <p class="mt-3">The course contains the following subjects and there time period:</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show " id="nav-special-in-HVACR" role="tabpanel" aria-labelledby="nav-special-in-HVACR-tab">
                                <div class="course-inner">
                                    <img src="{{asset('assets/images/lion.jpeg')}}" alt="" class="w-100">
                                    <div class="overview-outer">
                                        <h5 class="text-left mt-5">Course Overview</h5>
                                        <p class="mt-3">This course is for those people who are unemployeed and have no skills. We are here to give you skills after completing this course you are gonna hire by some company or start your own business. </p>
                                    </div>
                                    <div class="Eligibility-outer">
                                        <h5 class="text-left mt-5">Eligibility Criteria</h5>
                                        <ol class="text-left mt-3 ml-3">
                                            <li class="pl-2 my-2">Must be a citizen of Pakistan/AJ&K with age between 15-40 years.</li>
                                            <li class="pl-2 my-2">Any false information on the Application Form may render the student liable to expulsion from the Institute.</li>
                                            <li class="pl-2 my-2">The candidate will be selected by the Admission Committee of an Institute. The decisions of the Admission Committee in respect of selection and admission shall be final.</li>
                                            <li class="pl-2 my-2">After admission, the applicant will not be allowed to change his/her discipline and to claim exemption of tuition fee and other dues.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the fee (if applicable) on the due date.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the Attested Copies of Complete Academic Certificates, NIC, and Four passport size photographs.</li>
                                        </ol>
                                    </div>
                                    <div class="curriculum-outer">
                                        <h5 class="text-left mt-5">curriculum</h5>
                                        <p class="mt-3">The course contains the following subjects and there time period:</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-Printing" role="tabpanel" aria-labelledby="v-pills-Printing-tab">
                        <nav>
                            <div class="nav nav-pills nav-fill" id="nav-tab" role="tablist">
                                <button class="nav-link border-0 active" id="nav-Printing-Graphics-Arts-tab" data-toggle="tab" data-target="#nav-Printing-Graphics-Arts" type="button" role="tab" aria-controls="nav-Printing-Graphics-Arts" aria-selected="true">Printing-Graphics-Arts</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-Printing-Graphics-Arts" role="tabpanel" aria-labelledby="nav-Printing-Graphics-Arts-tab">
                                <img src="{{asset('assets/images/lion.jpeg')}}" alt="" class="w-100">
                                <div class="overview-outer">
                                    <h5 class="text-left mt-5">Course Overview</h5>
                                    <p class="mt-3">This course is for those people who are unemployeed and have no skills. We are here to give you skills after completing this course you are gonna hire by some company or start your own business. </p>
                                </div>
                                <div class="Eligibility-outer">
                                    <h5 class="text-left mt-5">Eligibility Criteria</h5>
                                    <ol class="text-left mt-3 ml-3">
                                        <li class="pl-2 my-2">Must be a citizen of Pakistan/AJ&K with age between 15-40 years.</li>
                                        <li class="pl-2 my-2">Any false information on the Application Form may render the student liable to expulsion from the Institute.</li>
                                        <li class="pl-2 my-2">The candidate will be selected by the Admission Committee of an Institute. The decisions of the Admission Committee in respect of selection and admission shall be final.</li>
                                        <li class="pl-2 my-2">After admission, the applicant will not be allowed to change his/her discipline and to claim exemption of tuition fee and other dues.</li>
                                        <li class="pl-2 my-2">The candidate must have to submit the fee (if applicable) on the due date.</li>
                                        <li class="pl-2 my-2">The candidate must have to submit the Attested Copies of Complete Academic Certificates, NIC, and Four passport size photographs.</li>
                                    </ol>
                                </div>
                                <div class="curriculum-outer">
                                    <h5 class="text-left mt-5">curriculum</h5>
                                    <p class="mt-3">The course contains the following subjects and there time period:</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-Health" role="tabpanel" aria-labelledby="v-pills-Health-tab">
                        <nav>
                            <div class="nav nav-pills nav-fill" id="nav-tab" role="tablist">
                                <button class="nav-link border-0 active" id="nav-Bio-Medical-tab" data-toggle="tab" data-target="#nav-Bio-Medical" type="button" role="tab" aria-controls="nav-Bio-Medical" aria-selected="true">Bio-Medical</button>
                                <button class="nav-link border-0" id="nav-Nurse-tab" data-toggle="tab" data-target="#nav-Nurse" type="button" role="tab" aria-controls="nav-Nurse" aria-selected="true">Nurse</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-Bio-Medical" role="tabpanel" aria-labelledby="nav-Bio-Medical-tab">Bio-<div class="course-inner">
                                    <img src="{{asset('assets/images/lion.jpeg')}}" alt="" class="w-100">
                                    <div class="overview-outer">
                                        <h5 class="text-left mt-5">Course Overview</h5>
                                        <p class="mt-3">This course is for those people who are unemployeed and have no skills. We are here to give you skills after completing this course you are gonna hire by some company or start your own business. </p>
                                    </div>
                                    <div class="Eligibility-outer">
                                        <h5 class="text-left mt-5">Eligibility Criteria</h5>
                                        <ol class="text-left mt-3 ml-3">
                                            <li class="pl-2 my-2">Must be a citizen of Pakistan/AJ&K with age between 15-40 years.</li>
                                            <li class="pl-2 my-2">Any false information on the Application Form may render the student liable to expulsion from the Institute.</li>
                                            <li class="pl-2 my-2">The candidate will be selected by the Admission Committee of an Institute. The decisions of the Admission Committee in respect of selection and admission shall be final.</li>
                                            <li class="pl-2 my-2">After admission, the applicant will not be allowed to change his/her discipline and to claim exemption of tuition fee and other dues.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the fee (if applicable) on the due date.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the Attested Copies of Complete Academic Certificates, NIC, and Four passport size photographs.</li>
                                        </ol>
                                    </div>
                                    <div class="curriculum-outer">
                                        <h5 class="text-left mt-5">curriculum</h5>
                                        <p class="mt-3">The course contains the following subjects and there time period:</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="nav-Nurse" role="tabpanel" aria-labelledby="nav-Nurse-tab">
                                <div class="course-inner">
                                    <img src="{{asset('assets/images/lion.jpeg')}}" alt="" class="w-100">
                                    <div class="overview-outer">
                                        <h5 class="text-left mt-5">Course Overview</h5>
                                        <p class="mt-3">This course is for those people who are unemployeed and have no skills. We are here to give you skills after completing this course you are gonna hire by some company or start your own business. </p>
                                    </div>
                                    <div class="Eligibility-outer">
                                        <h5 class="text-left mt-5">Eligibility Criteria</h5>
                                        <ol class="text-left mt-3 ml-3">
                                            <li class="pl-2 my-2">Must be a citizen of Pakistan/AJ&K with age between 15-40 years.</li>
                                            <li class="pl-2 my-2">Any false information on the Application Form may render the student liable to expulsion from the Institute.</li>
                                            <li class="pl-2 my-2">The candidate will be selected by the Admission Committee of an Institute. The decisions of the Admission Committee in respect of selection and admission shall be final.</li>
                                            <li class="pl-2 my-2">After admission, the applicant will not be allowed to change his/her discipline and to claim exemption of tuition fee and other dues.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the fee (if applicable) on the due date.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the Attested Copies of Complete Academic Certificates, NIC, and Four passport size photographs.</li>
                                        </ol>
                                    </div>
                                    <div class="curriculum-outer">
                                        <h5 class="text-left mt-5">curriculum</h5>
                                        <p class="mt-3">The course contains the following subjects and there time period:</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-Computer" role="tabpanel" aria-labelledby="v-pills-Computer-tab">
                        <nav>
                            <div class="nav nav-pills nav-fill" id="nav-tab" role="tablist">
                                <button class="nav-link border-0 active" id="nav-Web-development-tab" data-toggle="tab" data-target="#nav-Web-development" type="button" role="tab" aria-controls="nav-Web-development" aria-selected="true">Web-development</button>
                                <button class="nav-link border-0" id="nav-Computer-Information-tab" data-toggle="tab" data-target="#nav-Computer-Information" type="button" role="tab" aria-controls="nav-Computer-Information" aria-selected="true">Computer-Information</button>
                                <button class="nav-link border-0" id="nav-Graphic-designing-tab" data-toggle="tab" data-target="#nav-Graphic-designing" type="button" role="tab" aria-controls="nav-Graphic-designing" aria-selected="true">Graphic-designing</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-Web-development" role="tabpanel" aria-labelledby="nav-Web-development-tab">
                                <div class="course-inner">
                                    <img src="{{asset('assets/images/lion.jpeg')}}" alt="" class="w-100">
                                    <div class="overview-outer">
                                        <h5 class="text-left mt-5">Course Overview</h5>
                                        <p class="mt-3">This course is for those people who are unemployeed and have no skills. We are here to give you skills after completing this course you are gonna hire by some company or start your own business. </p>
                                    </div>
                                    <div class="Eligibility-outer">
                                        <h5 class="text-left mt-5">Eligibility Criteria</h5>
                                        <ol class="text-left mt-3 ml-3">
                                            <li class="pl-2 my-2">Must be a citizen of Pakistan/AJ&K with age between 15-40 years.</li>
                                            <li class="pl-2 my-2">Any false information on the Application Form may render the student liable to expulsion from the Institute.</li>
                                            <li class="pl-2 my-2">The candidate will be selected by the Admission Committee of an Institute. The decisions of the Admission Committee in respect of selection and admission shall be final.</li>
                                            <li class="pl-2 my-2">After admission, the applicant will not be allowed to change his/her discipline and to claim exemption of tuition fee and other dues.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the fee (if applicable) on the due date.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the Attested Copies of Complete Academic Certificates, NIC, and Four passport size photographs.</li>
                                        </ol>
                                    </div>
                                    <div class="curriculum-outer">
                                        <h5 class="text-left mt-5">curriculum</h5>
                                        <p class="mt-3">The course contains the following subjects and there time period:</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="nav-Computer-Information" role="tabpanel" aria-labelledby="nav-Computer-Information-tab">
                                <div class="course-inner">
                                    <img src="{{asset('assets/images/lion.jpeg')}}" alt="" class="w-100">
                                    <div class="overview-outer">
                                        <h5 class="text-left mt-5">Course Overview</h5>
                                        <p class="mt-3">This course is for those people who are unemployeed and have no skills. We are here to give you skills after completing this course you are gonna hire by some company or start your own business. </p>
                                    </div>
                                    <div class="Eligibility-outer">
                                        <h5 class="text-left mt-5">Eligibility Criteria</h5>
                                        <ol class="text-left mt-3 ml-3">
                                            <li class="pl-2 my-2">Must be a citizen of Pakistan/AJ&K with age between 15-40 years.</li>
                                            <li class="pl-2 my-2">Any false information on the Application Form may render the student liable to expulsion from the Institute.</li>
                                            <li class="pl-2 my-2">The candidate will be selected by the Admission Committee of an Institute. The decisions of the Admission Committee in respect of selection and admission shall be final.</li>
                                            <li class="pl-2 my-2">After admission, the applicant will not be allowed to change his/her discipline and to claim exemption of tuition fee and other dues.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the fee (if applicable) on the due date.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the Attested Copies of Complete Academic Certificates, NIC, and Four passport size photographs.</li>
                                        </ol>
                                    </div>
                                    <div class="curriculum-outer">
                                        <h5 class="text-left mt-5">curriculum</h5>
                                        <p class="mt-3">The course contains the following subjects and there time period:</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="nav-Graphic-designing" role="tabpanel" aria-labelledby="nav-Graphic-designing-tab">
                                <div class="course-inner">
                                    <img src="{{asset('assets/images/lion.jpeg')}}" alt="" class="w-100">
                                    <div class="overview-outer">
                                        <h5 class="text-left mt-5">Course Overview</h5>
                                        <p class="mt-3">This course is for those people who are unemployeed and have no skills. We are here to give you skills after completing this course you are gonna hire by some company or start your own business. </p>
                                    </div>
                                    <div class="Eligibility-outer">
                                        <h5 class="text-left mt-5">Eligibility Criteria</h5>
                                        <ol class="text-left mt-3 ml-3">
                                            <li class="pl-2 my-2">Must be a citizen of Pakistan/AJ&K with age between 15-40 years.</li>
                                            <li class="pl-2 my-2">Any false information on the Application Form may render the student liable to expulsion from the Institute.</li>
                                            <li class="pl-2 my-2">The candidate will be selected by the Admission Committee of an Institute. The decisions of the Admission Committee in respect of selection and admission shall be final.</li>
                                            <li class="pl-2 my-2">After admission, the applicant will not be allowed to change his/her discipline and to claim exemption of tuition fee and other dues.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the fee (if applicable) on the due date.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the Attested Copies of Complete Academic Certificates, NIC, and Four passport size photographs.</li>
                                        </ol>
                                    </div>
                                    <div class="curriculum-outer">
                                        <h5 class="text-left mt-5">curriculum</h5>
                                        <p class="mt-3">The course contains the following subjects and there time period:</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-Garments" role="tabpanel" aria-labelledby="v-pills-Garments-tab">
                        <nav>
                            <div class="nav nav-pills nav-fill" id="nav-tab" role="tablist">
                                <button class="nav-link border-0 active" id="nav-Textile-Weaving-tab" data-toggle="tab" data-target="#nav-Textile-Weaving" type="button" role="tab" aria-controls="nav-Textile-Weaving" aria-selected="true">Textile-Weaving</button>
                                <button class="nav-link border-0" id="nav-Textile-Dying-Printing-tab" data-toggle="tab" data-target="#nav-Textile-Dying-Printing" type="button" role="tab" aria-controls="nav-Textile-Dying-Printing" aria-selected="true">Textile-Dying-Printing</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-Textile-Weaving" role="tabpanel" aria-labelledby="nav-Textile-Weaving-tab">
                                <div class="course-inner">
                                    <img src="{{asset('assets/images/lion.jpeg')}}" alt="" class="w-100">
                                    <div class="overview-outer">
                                        <h5 class="text-left mt-5">Course Overview</h5>
                                        <p class="mt-3">This course is for those people who are unemployeed and have no skills. We are here to give you skills after completing this course you are gonna hire by some company or start your own business. </p>
                                    </div>
                                    <div class="Eligibility-outer">
                                        <h5 class="text-left mt-5">Eligibility Criteria</h5>
                                        <ol class="text-left mt-3 ml-3">
                                            <li class="pl-2 my-2">Must be a citizen of Pakistan/AJ&K with age between 15-40 years.</li>
                                            <li class="pl-2 my-2">Any false information on the Application Form may render the student liable to expulsion from the Institute.</li>
                                            <li class="pl-2 my-2">The candidate will be selected by the Admission Committee of an Institute. The decisions of the Admission Committee in respect of selection and admission shall be final.</li>
                                            <li class="pl-2 my-2">After admission, the applicant will not be allowed to change his/her discipline and to claim exemption of tuition fee and other dues.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the fee (if applicable) on the due date.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the Attested Copies of Complete Academic Certificates, NIC, and Four passport size photographs.</li>
                                        </ol>
                                    </div>
                                    <div class="curriculum-outer">
                                        <h5 class="text-left mt-5">curriculum</h5>
                                        <p class="mt-3">The course contains the following subjects and there time period:</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="nav-Textile-Dying-Printing" role="tabpanel" aria-labelledby="nav-Textile-Dying-Printing-tab">
                                <div class="course-inner">
                                    <img src="{{asset('assets/images/lion.jpeg')}}" alt="" class="w-100">
                                    <div class="overview-outer">
                                        <h5 class="text-left mt-5">Course Overview</h5>
                                        <p class="mt-3">This course is for those people who are unemployeed and have no skills. We are here to give you skills after completing this course you are gonna hire by some company or start your own business. </p>
                                    </div>
                                    <div class="Eligibility-outer">
                                        <h5 class="text-left mt-5">Eligibility Criteria</h5>
                                        <ol class="text-left mt-3 ml-3">
                                            <li class="pl-2 my-2">Must be a citizen of Pakistan/AJ&K with age between 15-40 years.</li>
                                            <li class="pl-2 my-2">Any false information on the Application Form may render the student liable to expulsion from the Institute.</li>
                                            <li class="pl-2 my-2">The candidate will be selected by the Admission Committee of an Institute. The decisions of the Admission Committee in respect of selection and admission shall be final.</li>
                                            <li class="pl-2 my-2">After admission, the applicant will not be allowed to change his/her discipline and to claim exemption of tuition fee and other dues.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the fee (if applicable) on the due date.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the Attested Copies of Complete Academic Certificates, NIC, and Four passport size photographs.</li>
                                        </ol>
                                    </div>
                                    <div class="curriculum-outer">
                                        <h5 class="text-left mt-5">curriculum</h5>
                                        <p class="mt-3">The course contains the following subjects and there time period:</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="nav-Textile-Dying-Printing" role="tabpanel" aria-labelledby="nav-Textile-Dying-Printing-tab">
                                <div class="course-inner">
                                    <img src="{{asset('assets/images/lion.jpeg')}}" alt="" class="w-100">
                                    <div class="overview-outer">
                                        <h5 class="text-left mt-5">Course Overview</h5>
                                        <p class="mt-3">This course is for those people who are unemployeed and have no skills. We are here to give you skills after completing this course you are gonna hire by some company or start your own business. </p>
                                    </div>
                                    <div class="Eligibility-outer">
                                        <h5 class="text-left mt-5">Eligibility Criteria</h5>
                                        <ol class="text-left mt-3 ml-3">
                                            <li class="pl-2 my-2">Must be a citizen of Pakistan/AJ&K with age between 15-40 years.</li>
                                            <li class="pl-2 my-2">Any false information on the Application Form may render the student liable to expulsion from the Institute.</li>
                                            <li class="pl-2 my-2">The candidate will be selected by the Admission Committee of an Institute. The decisions of the Admission Committee in respect of selection and admission shall be final.</li>
                                            <li class="pl-2 my-2">After admission, the applicant will not be allowed to change his/her discipline and to claim exemption of tuition fee and other dues.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the fee (if applicable) on the due date.</li>
                                            <li class="pl-2 my-2">The candidate must have to submit the Attested Copies of Complete Academic Certificates, NIC, and Four passport size photographs.</li>
                                        </ol>
                                    </div>
                                    <div class="curriculum-outer">
                                        <h5 class="text-left mt-5">curriculum</h5>
                                        <p class="mt-3">The course contains the following subjects and there time period:</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div> -->
    <!-- Acadmics details section ends here -->

    <!-- Quick links starts here -->
    <div class="container-fluid py-5 bg-light">
        <div class="container">
            <!-- <h1 class="text-center text-dark font-weight-bolder">Information<span class="text-success"> Corner</span></h1> -->
            <div class="row m-0">
                <div class="col-12 col-md-4">
                    <div class="m-4 px-5 py-3 rounded bg-white shadow-lg text-center">
                        <a href="/serviceCenter" class="text-success font-weight-bolder h4 text-decoration-none">Service Centers</a>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="m-4 px-5 py-3 rounded bg-white shadow-lg text-center">
                        <a href="/researchPublication" class="text-success font-weight-bolder h4 text-decoration-none">Research&nbsp;& Publications</a>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="m-4 px-5 py-3 rounded bg-white shadow-lg text-center">
                        <a href="/financialSupport" class="text-success font-weight-bolder h4 text-decoration-none">Financial Support</a>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="m-4 px-5 py-3 rounded bg-white shadow-lg text-center">
                        <a href="/faculty" class="text-success font-weight-bolder h4 text-decoration-none">Faculty <br></a>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="m-4 px-5 py-3 rounded bg-white shadow-lg text-center">
                        <a href="/rulesRegulation" class="text-success font-weight-bolder h4 text-decoration-none">Rules & Regulations</a>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="m-4 px-5 py-3 rounded bg-white shadow-lg text-center">
                        <a href="/schoolOfGbtevta" class="text-success font-weight-bolder h4 text-decoration-none">Schools&nbsp;of GB&nbsp;Tevta</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick links ends here -->

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