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
                            <form action="{{url('upload_Blog')}}" method="POST" enctype="multipart/form-data">

                                @csrf

                                <div class="pt-1 form-group">
                                    <label for="blog_image">Blog Image</label>
                                    <input type="file" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="blog_image" name="blog_image" placeholder="Blog Image" required>
                                </div>

                                <div class="pt-1 form-group">
                                    <label for="blog_date">Blog Date</label>
                                    <input type="date" class="form-control bg-white text-dark border-0 rounded-sm" id="blog_date" name="blog_date" placeholder="Blog Date" required>
                                </div>

                                <div class="pt-1 form-group">
                                    <label for="blog_title">Blog Title</label>
                                    <input type="text" class="form-control bg-white text-dark border-0 rounded-sm" id="blog_title" name="blog_title" placeholder="Blog Title" required>
                                </div>

                                <div class="pt-1 form-group">
                                    <label for="blog_detail">Blog Paragraph</label>
                                    <textarea class="form-control text-dark border-0 rounded-sm bg-white" id="blog_detail" name="blog_detail" placeholder="Blog Paragraph" cols="30" rows="10" required></textarea>
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