@foreach($course as $courses)
<div class="row mt-5 bg-white shadow rounded">
    <div class="col-12 col-md-5">
        <img src="courseimage/{{$courses->course_image}}" alt="" class="w-100">
    </div>
    <div class="col-12 col-md-7 py-2">
        <h2 class="text-left my-3">{{$courses->course_name}}</h2>
        <h5 class="text-left">Course Overview</h5>
        <p class="text-left">{{$courses->course_overview}}</p>

        <h5 class="text-left mt-3">
            <a class="text-dark text-decoration-none" data-toggle="collapse" href="#eCriteria{{$courses->id}}" role="button" aria-expanded="false" aria-controls="eCriteria{{$courses->id}}">
                Eligibility Criteria
            </a>
        </h5>
        <div class="collapse" id="eCriteria{{$courses->id}}">
            <div class="card card-body pt-0 border-0">
                <ol>
                    <li class="my-1">{{$courses->course_criteria1}}</li>
                    <li class="my-1">{{$courses->course_criteria2}}</li>
                    <li class="my-1">{{$courses->course_criteria3}}</li>
                    <li class="my-1">{{$courses->course_criteria4}}</li>
                    <li class="my-1">{{$courses->course_criteria5}}</li>
                    <li class="my-1">{{$courses->course_criteria6}}</li>
                    <li class="my-1">{{$courses->course_criteria7}}</li>
                    <li class="my-1">{{$courses->course_criteria8}}</li>
                    <li class="my-1">{{$courses->course_criteria9}}</li>
                </ol>
            </div>
        </div>
        <h5 class="text-left">
            <a class="text-dark text-decoration-none" data-toggle="collapse" href="#curriculumOverview{{$courses->id}}" role="button" aria-expanded="false" aria-controls="curriculumOverview{{$courses->id}}">
                curriculum
            </a>
        </h5>
        <div class="collapse" id="curriculumOverview{{$courses->id}}">
            <div class="card card-body border-0">
                {{$courses->course_curriculum}}
            </div>
        </div>

        <button class="btn btn-success"><a href="/registrationform" class="text-white text-decoration-none">Enroll now</a></button>
    </div>
</div>
@endforeach