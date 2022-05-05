<?php

namespace App\Http\Livewire\Blog;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;


class Create extends Component
{
    use WithFileUploads;
    public $title, $text, $photo;
    public function render()
    {
        return view('livewire.blog.create');
    }
    public function kaydet()
    {
        $this->validate([
            'title' => 'required',
            'text' => 'required',
            'photo' => 'image|min:1',
        ]);
        $path = $this->photo->store('public/blogs');

        $blog = new Blog();
        $blog->title = $this->title;
        $blog->text = $this->text;
        $blog->photo = $path;
        $blog->user_id = Auth::id();
        $blog->save();
        $this->clear();
        $this->emit('blogGuncelle');
    }
    public function clear()
    {

        $this->title = '';
        $this->text = '';
        $this->photo = '';
    }
}
