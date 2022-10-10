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
                        <form action="{{url('editEvent', $data->id)}}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class="d-flex align-items-end">
                                <div class="pt-1 form-group">
                                    <label for="event_image">Old Event Image</label>
                                    <img src="eventimage/{{$data->event_Image}}" alt="" height="100px" width="100px" class="mr-5">
                                </div>
                                <div class="form-group">
                                    <label for="event_image">New Event Image</label>
                                    <input type="file" class="form-control bg-white pt-1 pl-1 text-dark border-0 rounded-sm" id="event_image" name="event_image" placeholder="Event Image" value="{{$data->event_Image}}">
                                </div>
                            </div>

                            <div class="pt-1 form-group">
                                <label for="event_tag">Event Tag</label>
                                <input type="text" class="form-control bg-white text-dark border-0 rounded-sm" name="event_tag" placeholder="Event tag" value="{{$data->event_tag}}">
                            </div>

                            <div class="pt-1 form-group">
                                <label for="event_date">Event Date</label>
                                <input type="date" class="form-control bg-white text-dark border-0 rounded-sm" name="event_date" placeholder="Event Date" value="{{$data->event_date}}">
                            </div>

                            <div class="pt-1 form-group">
                                <label for="event_title">Event Title</label>
                                <input type="text" class="form-control bg-white text-dark border-0 rounded-sm" name="event_title" placeholder="Event Title" value="{{$data->event_title}}">
                            </div>

                            <div class="pt-1 form-group">
                                <label for="event_detail">Event Paragraph</label>
                                <textarea class="form-control text-dark border-0 rounded-sm bg-white" name="event_detail" id="event_detail" placeholder="Event Paragraph" cols="30" rows="10">{{$data->event_detail}}</textarea>
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