<?php

namespace App\Http\Controllers\User\Blog;

use App\Http\Controllers\Controller;
use App\Models\blogs;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogs() {
        $data['blogs'] = blogs::get();
        return view('User.Blog.allblogs', $data);
    }
    public function viewBlogs( $slug ){
        $data['blog'] = blogs::where('slug', $slug)->first();
        return view("User.Blog.viewBlog", $data);
    }
}
