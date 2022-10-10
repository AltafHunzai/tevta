<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <base href="/public">
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->

            @include('admin.navbar')

            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <div class="row m-0 w-100 py-5">
                    <div class="col-12">
                        @if(session()->has('message'))

                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            {{session()->get('message')}}
                        </div>
                        @endif
                    </div>

                    <div class="col-12">
                        <form action="{{url('editJob', $data->id)}}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class="pt-1 form-group">
                                <label for="job_title">job Title</label>
                                <input value="{{$data->job_title}}" type="text" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="job_title" name="job_title" placeholder="job Title">
                            </div>

                            <div class="pt-1 form-group">
                                <label for="job_information">job information</label>
                                <input value="{{$data->job_information}}" type="text" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="job_information" name="job_information" placeholder="job information">
                            </div>

                            <div class="pt-1 form-group">
                                <label for="job_post_date">job Post Date</label>
                                <input value="{{$data->job_post_date}}" type="date" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="job_post_date" name="job_post_date" placeholder="job Post Date">
                            </div>

                            <div class="pt-1 form-group">
                                <label for="job_last_date">job last Date</label>
                                <input value="{{$data->job_last_date}}" type="date" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="job_last_date" name="job_last_date" placeholder="job last Date">
                            </div>

                            <div class="pt-1 form-group">
                                <label for="job_eligibility">job Eligibility</label>
                                <input value="{{$data->job_eligibility}}" type="text" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="job_eligibility" name="job_eligibility" placeholder="job Eligibility">
                            </div>

                            <div class="pt-1 form-group">
                                <button type="submit" class="btn bg-success w-100">Submit</button>
                            </div>

                        </form>
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