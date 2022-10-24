<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    
    public function index()
    {
        //get blogs
        $blogs = Blog::latest()->paginate(10);

        //render view with blogs
        return view('blog.index', compact('blogs'));
    }
}
