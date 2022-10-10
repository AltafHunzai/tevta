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
                        <form action="{{url('editCourse', $data->id)}}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class="d-flex align-items-end">
                                <div class="pt-1 form-group">
                                    <label for="course_image">Old Course Image</label>
                                    <img src="courseimage/{{$data->course_image}}" alt="" height="100px" width="100px" class="mr-5">
                                </div>
                                <div class="pt-1 form-group">
                                    <label for="course_image">Old Course Image</label>
                                    <input value="{{$data->course_image}}" type="file" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="course_image" name="course_image" placeholder="Course Image">
                                </div>
                            </div>



                            <div class="pt-1 form-group">
                                <label for="course_name">Course Name</label>
                                <input value="{{$data->course_name}}" type="text" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="course_name" name="course_name" placeholder="Course Name">
                            </div>

                            <div class="pt-1 form-group">
                                <label for="course_overview">Course Overview</label>
                                <input value="{{$data->course_overview}}" type="text" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="course_overview" name="course_overview" placeholder="Course Overview">
                            </div>

                            <!-- Eligibility Criteria info starts here -->
                            <div class="pt-1 form-group">
                                <label for="course_criteria1">Course Eligibility Criteria-1</label>
                                <input value="{{$data->course_criteria1}}" type="text" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="course_criteria1" name="course_criteria1" placeholder="Course Eligibility Criteria-1">
                            </div>

                            <div class="pt-1 form-group">
                                <label for="course_criteria2">Course Eligibility Criteria-2</label>
                                <input value="{{$data->course_criteria2}}" type="text" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="course_criteria2" name="course_criteria2" placeholder="Course Eligibility Criteria-2">
                            </div>

                            <div class="pt-1 form-group">
                                <label for="course_criteria3">Course Eligibility Criteria-3</label>
                                <input value="{{$data->course_criteria3}}" type="text" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="course_criteria3" name="course_criteria3" placeholder="Course Eligibility Criteria-3">
                            </div>

                            <div class="pt-1 form-group">
                                <label for="course_criteria4">Course Eligibility Criteria-4</label>
                                <input value="{{$data->course_criteria4}}" type="text" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="course_criteria4" name="course_criteria4" placeholder="Course Eligibility Criteria-4">
                            </div>

                            <div class="pt-1 form-group">
                                <label for="course_criteria5">Course Eligibility Criteria-5</label>
                                <input value="{{$data->course_criteria5}}" type="text" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="course_criteria5" name="course_criteria5" placeholder="Course Eligibility Criteria-5">
                            </div>

                            <div class="pt-1 form-group">
                                <label for="course_criteria6">Course Eligibility Criteria-6</label>
                                <input value="{{$data->course_criteria6}}" type="text" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="course_criteria6" name="course_criteria6" placeholder="Course Eligibility Criteria-6">
                            </div>

                            <div class="pt-1 form-group">
                                <label for="course_criteria7">Course Eligibility Criteria-7</label>
                                <input value="{{$data->course_criteria7}}" type="text" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="course_criteria7" name="course_criteria7" placeholder="Course Eligibility Criteria-7">
                            </div>

                            <div class="pt-1 form-group">
                                <label for="course_criteria8">Course Eligibility Criteria-8</label>
                                <input value="{{$data->course_criteria8}}" type="text" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="course_criteria8" name="course_criteria8" placeholder="Course Eligibility Criteria-8">
                            </div>

                            <div class="pt-1 form-group">
                                <label for="course_criteria9">Course Eligibility Criteria-9</label>
                                <input value="{{$data->course_criteria9}}" type="text" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="course_criteria9" name="course_criteria9" placeholder="Course Eligibility Criteria-9">
                            </div>

                            <!-- curriculum table info starts here -->
                            <div class="pt-1 form-group">
                                <label for="course_curriculum">Course Curriculum</label>
                                <input value="{{$data->course_curriculum}}" type="text" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="course_curriculum" name="course_curriculum" placeholder="Course Curriculum">
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