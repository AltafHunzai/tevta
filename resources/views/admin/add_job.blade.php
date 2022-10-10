<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->



            <div class="container pt-5 ">

                @include('admin.navbar')

                <!-- partial -->
                <div class="container-fluid page-body-wrapper">
                    <div class="row m-0 w-100">
                        <div class="col-12">
                            @if(session()->has('message'))

                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                {{session()->get('message')}}
                            </div>
                            @endif
                        </div>

                        <div class="col-12">
                            <form action="{{url('upload_Job')}}" method="POST" enctype="multipart/form-data">

                                @csrf

                                <div class="pt-1 form-group">
                                    <label for="job_title">Job Title</label>
                                    <input type="text" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="job_title" name="job_title" placeholder="job Title" required>
                                </div>

                                <div class="pt-1 form-group">
                                    <label for="job_information">Job Information</label>
                                    <input type="text" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="job_information" name="job_information" placeholder="Job Information" required>
                                </div>

                                <div class="pt-1 form-group">
                                    <label for="job_post_date">Job posted Date</label>
                                    <input type="date" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="job_post_date" name="job_post_date" placeholder="Job posted Date" required>
                                </div>

                                <div class="pt-1 form-group">
                                    <label for="job_last_date">Job Last Date</label>
                                    <input type="date" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="job_last_date" name="job_last_date" placeholder="Job Last Date" required>
                                </div>

                                <div class="pt-1 form-group">
                                    <label for="job_eligibility">Job Eligibility</label>
                                    <input type="text" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="job_eligibility" name="job_eligibility" placeholder="Job Eligibility" required>
                                </div>

                                <div class="pt-1 form-group">
                                    <button type="submit" class="btn bg-success w-100">Submit</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
</body>

</html>