<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Models\blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['blogs'] = DB::table('blogs')->get();
        return view("Admin.Blog.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view("Admin.Blog.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string'
        ]);
        $data = $request->except('_token', 'image', 'slug');
        $slug = Str::slug($data['title']);
        $slug_count = DB::table('blogs')->where('slug',$slug)->count();
         if($slug_count>0){
             $slug = time().rand(100000, 999999).'-'.$slug;
         } 
        $data['slug'] = $slug;
        if ($request->has("image")) {
             
             $image = $request->file("image");
             
             $blog_image =
                 time() .
                 rand(0000, 9999) .
                 "." .
                 $image->getClientOriginalExtension();
         
             $image->storeAs("public/BlogImage", $blog_image);
         
             $data["image"] = $blog_image;
         }
        // $data['user_id'] = $session['id'];
        $store = DB::table('blogs')->insert($data);
        if($store){
            return redirect('admin/blogs')->with('msg', 'New Blog Inserted Successfully');
        }else{
            return redirect()->back()->with('msg', 'Some Error Occur!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $data['blog'] = DB::table('blogs')->where('slug', $slug)->first();
        return view('Admin.Blog.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $data['blog'] = DB::table('blogs')->where('slug', $slug)->first();
        return view('Admin.Blog.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string'
        ]);
        $img = DB::table('blogs')->where("slug", $slug)->select('image')->first();
        $data = $request->except('_token', '_method', 'image');
        if ($request->has("image")) {
         
          File::delete("storage/BlogImage/" . $img->image);
          
          $image = $request->file("image");
          $blog_img =
              time() .
              rand(0000, 9999) .
              "." .
              $image->getClientOriginalExtension();
          
          $image->storeAs("public/BlogImage", $blog_img);
     
          $data["image"] = $blog_img;
              }else {
                  $data["image"] = $img->image;
              }
  
              $update = blogs::where('slug',$slug)->update($data);
              if ($update) {
                  return redirect('admin/blogs')
                      ->with("msg", "Blog is Updated Successfully");
                  } else {
                  return redirect()
                      ->back()
                      ->with("msg", "Some Error Occured!");
              }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $delete_blog = blogs::where('slug',$slug)->first();
        $delete_blog->delete();
        return redirect()->back()->with('msg',$delete_blog->title .' Deleted Successfully');
    }
}
