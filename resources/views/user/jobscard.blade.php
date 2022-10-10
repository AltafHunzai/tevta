@foreach($job as $jobs)
<div class="col-12 col-md-6">
    <div class="card mb-3 border-0 bg-dark shadow rounded" style="max-width: 540px;">
        <div class="no-gutters">
            <div class="card-body bg-dark rounded shadow">
                <h3 class="card-title mt-4 text-white">{{$jobs->job_title}}</h3>
                <p class="card-text text-white">{{$jobs->job_information}}</p>
                <p class="card-text m-0 p-0"><small class="text-white">Job posted on {{$jobs->job_post_date}}</small></p>
                <p class="card-text m-0 p-0"><small class="text-danger">Last date is {{$jobs->job_last_date}}</small></p>
                <p class="card-text m-0 p-0"><small><a class=" text-decoration-none" data-toggle="collapse" href="#collapse{{$jobs->id}}" role="button" aria-expanded="false" aria-controls="collapse{{$jobs->id}}">Eligibility Criteria</a></small>
                <p class="collapse text-white" id="collapse{{$jobs->id}}">{{$jobs->job_eligibility}}</p>
                </p>
            </div>
        </div>
    </div>
</div>
@endforeach