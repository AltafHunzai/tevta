<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
        td {
            overflow: hidden;
        }
    </style>
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
            <div class="container-fluid page-body-wrapper m-0 w-100">
                <div class="text-center py-3">
                    <table>
                        <thead>
                            <tr>
                                <td class="py-2 px-2 text-dark bg-secondary border font-weight-bolder">ID</td>
                                <td class="py-2 px-2 text-dark bg-secondary border font-weight-bolder">Course Image</td>
                                <td class="py-2 px-2 text-dark bg-secondary border font-weight-bolder">Course Name</td>
                                <td class="py-2 px-2 text-dark bg-secondary border font-weight-bolder">Course Overview</td>
                                <td class="py-2 px-2 text-dark bg-secondary border font-weight-bolder">criteria 01</td>
                                <td class="py-2 px-2 text-dark bg-secondary border font-weight-bolder">criteria 02</td>
                                <td class="py-2 px-2 text-dark bg-secondary border font-weight-bolder">criteria 03</td>
                                <td class="py-2 px-2 text-dark bg-secondary border font-weight-bolder">criteria 04</td>
                                <td class="py-2 px-2 text-dark bg-secondary border font-weight-bolder">criteria 05</td>
                                <td class="py-2 px-2 text-dark bg-secondary border font-weight-bolder">criteria 06</td>
                                <td class="py-2 px-2 text-dark bg-secondary border font-weight-bolder">criteria 07</td>
                                <td class="py-2 px-2 text-dark bg-secondary border font-weight-bolder">criteria 08</td>
                                <td class="py-2 px-2 text-dark bg-secondary border font-weight-bolder">criteria 09</td>
                                <td class="py-2 px-2 text-dark bg-secondary border font-weight-bolder">Curriculum</td>
                                <td class="py-2 px-2 text-dark bg-secondary border font-weight-bolder">Actions</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $course)
                            <tr>
                                <td class="py-2 px-2 text-dark bg-light border">{{$course->id}}</td>
                                <td class="py-2 px-2 text-dark bg-light border"><img height="10" width="50" src="courseimage/{{$course->course_image}}"></td>
                                <td class="py-2 px-2 text-dark bg-light border">{{$course->course_name}}</td>
                                <td class="py-2 px-2 text-dark bg-light border"><small>{{$course->course_overview}}</small></td>
                                <td class="py-2 px-2 text-dark bg-light border"><small>{{$course->course_criteria1}}</small></td>
                                <td class="py-2 px-2 text-dark bg-light border"><small>{{$course->course_criteria2}}</small></td>
                                <td class="py-2 px-2 text-dark bg-light border"><small>{{$course->course_criteria3}}</small></td>
                                <td class="py-2 px-2 text-dark bg-light border"><small>{{$course->course_criteria4}}</small></td>
                                <td class="py-2 px-2 text-dark bg-light border"><small>{{$course->course_criteria5}}</small></td>
                                <td class="py-2 px-2 text-dark bg-light border"><small>{{$course->course_criteria6}}</small></td>
                                <td class="py-2 px-2 text-dark bg-light border"><small>{{$course->course_criteria7}}</small></td>
                                <td class="py-2 px-2 text-dark bg-light border"><small>{{$course->course_criteria8}}</small></td>
                                <td class="py-2 px-2 text-dark bg-light border"><small>{{$course->course_criteria9}}</small></td>
                                <td class="py-2 px-2 text-dark bg-light border"><small>{{$course->course_curriculum}}</small></td>
                                <td class="py-3 px-2 text-dark bg-light border">
                                    <a onclick="return confirm('Are you sure you want to delete this course?')" href="{{url('deletecourse', $course->id)}}" class="my-1 mx-1 btn btn-outline-danger">delete</a>
                                    <a href="{{url('updatecourse', $course->id)}}" class="my-1 mx-1 btn btn-outline-info">Update</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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