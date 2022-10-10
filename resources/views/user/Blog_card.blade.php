@foreach($blog as $blogs)
<div class="col-md-12">
    <article class="shadow article mb-5">
        <div class="img-outer">
            <a href="#">
                <img src="blogimage/{{$blogs->blog_image}}" height="350" width="300" class="card-img rounded-0" alt="" />
            </a>
        </div>
        <div class="py-3">
            <a class="text" href="#">
                <div class="px-3"><i class="fas fa-calendar-alt"></i> {{$blogs->blog_date}}</div>
            </a>
            <a class="text" href="#">
                <h4 class="px-3 my-3 text-border">{{$blogs->blog_title}}</h4>
            </a>
            <p class="px-3 text-dark">{{$blogs->blog_detail}}</p>  
        </div>
    </article>
</div>
@endforeach