@foreach($event as $events)
<div class="col-12 col-md-4 mt-5">
    <div class="card shadow" style="width: 20rem;">
        <div class="card-img-outer">
            <img height="300px" src="eventimage/{{$events->event_Image}}" class=" img-card card-img">
        </div>
        <div class="card-body">
            <div class="p-2 shadow-sm d-inline-block text-success rounded my-2 bg-light">{{$events->event_tag}}</div>
            <div class="my-3">
                <i class="fas fa-clock text-success mr-3"></i>
                <span class="text-dark">{{$events->event_date}}</span>
            </div>
            <h5 class="card-title">{{$events->event_title}}</h5>
            <p class="text-left text-dark">{{$events->event_detail}}</p>
            <!-- <a href="#" class="text-decoration-none">See More</a> -->
        </div>
    </div>
</div>
@endforeach