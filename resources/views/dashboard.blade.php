<x-app-layout>
    <div class="container">
    <div class="button">
        <a href="{{route('blog')}}" class="btn btn-success">Anasayfa</a>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-5">
                @livewire('blog.create')
            </div>
            <div class="col-md-7">
               @livewire('blog.index')
            </div>
        </div>
    </div>

</x-app-layout>
