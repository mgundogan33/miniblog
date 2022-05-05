<div class="container">
    <!--Section: Content-->
    <section class="text-center">
        <h4 class="mb-5"><strong>Son Haberler</strong></h4>

        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Hızlı Blog Ara..." wire:model="search" />
            @if ($search != '')
                <button wire:click="clear" class="btn btn-outline-primary" type="button" id="button-addon2"
                    data-mdb-ripple-color="dark">
                    Ara
                </button>
            @endif
        </div>
        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-lg-4 col-md-12 mb-4">
                <div class="card">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="{{Storage::url($blog->photo)}}" class="img-fluid" />
                        <a href="{{route('detayBlog',$blog->id)}}">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$blog->title}}</h5>
                        <p class="card-text">
                            {{Str::limit($blog->text,90,'...')}}
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
