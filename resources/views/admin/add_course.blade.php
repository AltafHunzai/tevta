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
                            <form action="{{url('upload_Course')}}" method="POST" enctype="multipart/form-data">

                                @csrf

                                <div class="pt-1 form-group">
                                    <label for="course_image">Course Image</label>
                                    <input type="file" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="course_image" name="course_image" placeholder="Course Image" required>
                                </div>

                                <div class="pt-1 form-group">
                                    <label for="course_name">Course Name</label>
                                    <input type="text" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="course_name" name="course_name" placeholder="Course Name" required>
                                </div>

                                <div class="pt-1 form-group">
                                    <label for="course_overview">Course Overview</label>
                                    <input type="text" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="course_overview" name="course_overview" placeholder="Course Overview" required>
                                </div>

                                <!-- Eligibility Criteria info starts here -->
                                <div class="pt-1 form-group">
                                    <label for="course_criteria1">Course Eligibility Criteria-1</label>
                                    <input type="text" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="course_criteria1" name="course_criteria1" placeholder="Course Eligibility Criteria-1" required>
                                </div>

                                <div class="pt-1 form-group">
                                    <label for="course_criteria2">Course Eligibility Criteria-2</label>
                                    <input type="text" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="course_criteria2" name="course_criteria2" placeholder="Course Eligibility Criteria-2" required>
                                </div>

                                <div class="pt-1 form-group">
                                    <label for="course_criteria3">Course Eligibility Criteria-3</label>
                                    <input type="text" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="course_criteria3" name="course_criteria3" placeholder="Course Eligibility Criteria-3" required>
                                </div>

                                <div class="pt-1 form-group">
                                    <label for="course_criteria4">Course Eligibility Criteria-4</label>
                                    <input type="text" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="course_criteria4" name="course_criteria4" placeholder="Course Eligibility Criteria-4" required>
                                </div>

                                <div class="pt-1 form-group">
                                    <label for="course_criteria5">Course Eligibility Criteria-5</label>
                                    <input type="text" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="course_criteria5" name="course_criteria5" placeholder="Course Eligibility Criteria-5" required>
                                </div>

                                <div class="pt-1 form-group">
                                    <label for="course_criteria6">Course Eligibility Criteria-6</label>
                                    <input type="text" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="course_criteria6" name="course_criteria6" placeholder="Course Eligibility Criteria-6" required>
                                </div>

                                <div class="pt-1 form-group">
                                    <label for="course_criteria7">Course Eligibility Criteria-7</label>
                                    <input type="text" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="course_criteria7" name="course_criteria7" placeholder="Course Eligibility Criteria-7" required>
                                </div>

                                <div class="pt-1 form-group">
                                    <label for="course_criteria8">Course Eligibility Criteria-8</label>
                                    <input type="text" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="course_criteria8" name="course_criteria8" placeholder="Course Eligibility Criteria-8" required>
                                </div>

                                <div class="pt-1 form-group">
                                    <label for="course_criteria9">Course Eligibility Criteria-9</label>
                                    <input type="text" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="course_criteria9" name="course_criteria9" placeholder="Course Eligibility Criteria-9" required>
                                </div>

                                <!-- curriculum table info starts here -->
                                <div class="pt-1 form-group">
                                    <label for="course_curriculum">Course Curriculum</label>
                                    <input type="text" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="course_curriculum" name="course_curriculum" placeholder="Course Curriculum" required>
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