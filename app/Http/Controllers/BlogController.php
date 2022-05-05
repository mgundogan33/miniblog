<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        return view('blogs.index');
    }

    public function detay($idBlog)
    {
        $data=array('blog'=>Blog::findOrFail($idBlog));
        return view('blogs.detay',$data);
    }


}
