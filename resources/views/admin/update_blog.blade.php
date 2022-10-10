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
                        <form action="{{url('editBlog', $data->id)}}" method="POST" enctype="multipart/form-data">

                            @csrf


                            <div class="d-flex align-items-end">
                                <div class="pt-1 form-group">
                                    <label for="blog_image">Old Event Image</label>
                                    <img src="blogimage/{{$data->blog_image}}" alt="" height="100px" width="100px" class="mr-5">
                                </div>
                                <div class="pt-1 form-group">
                                <label for="blog_image">New Blog Image</label>
                                <input value="{{$data->blog_image}}" type="file" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="blog_image" name="blog_image" placeholder="Blog Image">
                            </div>
                            </div>

                            <div class="pt-1 form-group">
                                <label for="blog_date">Blog Date</label>
                                <input value="{{$data->blog_date}}" type="date" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="blog_date" name="blog_date" placeholder="Blog Date">
                            </div>

                            <div class="pt-1 form-group">
                                <label for="blog_title">Blog Title</label>
                                <input value="{{$data->blog_title}}" type="text" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="blog_title" name="blog_title" placeholder="Blog Title">
                            </div>

                            <div class="pt-1 form-group">
                                <label for="blog_detail">Blog Detail</label>
                                <input value="{{$data->blog_detail}}" type="text" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="blog_detail" name="blog_detail" placeholder="Blog Detail">
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