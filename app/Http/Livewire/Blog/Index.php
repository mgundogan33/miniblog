<?php

namespace App\Http\Livewire\Blog;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['blogGuncelle'];

public function mount(){

}
    public function render()
    {
        $data = array('blogs' => Blog::latest()->paginate(6));
        return view('livewire.blog.index', $data);
    }
    public function blogGuncelle()
    {
        $this->mount();
    }
}
