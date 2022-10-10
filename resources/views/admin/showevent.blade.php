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
            <div class="container-fluid page-body-wrapper mx-5 w-100">
                <div class="text-center py-3">
                    <table>
                        <thead>
                            <tr>
                                <td class="py-2 px-2 text-dark bg-secondary border font-weight-bolder">ID</td>
                                <td class="py-2 px-2 text-dark bg-secondary border font-weight-bolder">Image</td>
                                <td class="py-2 px-2 text-dark bg-secondary border font-weight-bolder">Tag</td>
                                <td class="py-2 px-2 text-dark bg-secondary border font-weight-bolder">Date</td>
                                <td class="py-2 px-2 text-dark bg-secondary border font-weight-bolder">Title</td>
                                <td class="py-2 px-2 text-dark bg-secondary border font-weight-bolder">Details</td>
                                <td class="py-2 px-2 text-dark bg-secondary border font-weight-bolder">Actions</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $event)
                            <tr>
                                <td class="py-2 px-2 text-dark bg-light border">{{$event->id}}</td>
                                <td class="py-2 px-2 text-dark bg-light border"><img height="10" width="50" src="eventimage/{{$event->event_Image}}"></td>
                                <td class="py-2 px-2 text-dark bg-light border">{{$event->event_tag}}</td>
                                <td class="py-2 px-2 text-dark bg-light border">{{$event->event_date}}</td>
                                <td class="py-2 px-2 text-dark bg-light border">{{$event->event_title}}</td>
                                <td class="py-2 px-2 text-dark bg-light border overflow-hidden"><small>{{$event->event_detail}}</small></td>
                                <td class="py-3 px-2 text-dark bg-light border d-flex">
                                    <a onclick="return confirm('Are you sure you want to delete this event?')" href="{{url('deleteevent', $event->id)}}" class="my-1 mx-1 btn btn-outline-danger">delete</a>
                                    <a href="{{url('updateevent', $event->id)}}" class="my-1 mx-1 btn btn-outline-info">Update</a>
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

</html>x