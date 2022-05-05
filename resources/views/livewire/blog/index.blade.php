<div class="container">
    <!--Section: Content-->
    <section class="text-center">
        <h4 class="mb-5"><strong>Son Haberler</strong></h4>

        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-lg-4 col-md-12 mb-4">
                <div class="card">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="{{$blog->photo}}" class="img-fluid" />
                        <a href="{{route('detayBlog',$blog->id)}}">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$blog->title}}</h5>
                        <p class="card-text">
                            {{$blog->text}}
                        </p>
                        <a href="{{route('detayBlog',$blog->id)}}" class="btn btn-primary">Detay</a>
                    </div>
                </div>
            </div>
            @endforeach
            {{$blogs->links()}}
        </div>

    </section>
    <!--Section: Content-->

</div>
