<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Str;
class AdminBlogController extends Controller
{
    public function index()
    {
        return view('admin.blog.add-blog');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'content' => 'required',
            'description' => 'required',
        ]);

        $slug = str_replace(['/', ' ', '\\', ',', '|', '%' ], '-', strtolower($request->title));
        $slug = preg_replace('/-+/', '-', $slug);

        $blog = new Blog;
        $blog->title = $request->title;
        $blog->slug = $slug;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $fileName = "blog".time().".".$file->getClientOriginalExtension();
            $file->move(public_path('uploads/blog/'), $fileName);
            $blog->image = $fileName;
        }
        $blog->content = $request->content;
        // $blog->description = $request->description;
        $checkSlug = $blog->whereSlug($slug)->exists();
        //  dd($blog);
        if (!$checkSlug) {
            $blog->save();
            return redirect()->route('view-blog')->with('success', 'Blog Uploaded Successful');
        } else {
            return back()->withInput()->with('error', 'Already Banner Name Exists');
        }
    }
    public function edit($id)
    {
        // dd($request->all());
        // $banner= banner::
        $id = request('id');
        // dd($id);

        $data = Blog::find($id);
        return view('admin.blog.edit-blog', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'description' => 'required',
        ]);
        $slug = str_replace(['/', ' ', '\\', ',', '|', '%' ], '-', strtolower($request->title));
        $slug = preg_replace('/-+/', '-', $slug);

        $id = $request->id;
        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->slug = $slug;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $filePath = 'uploads/blog/' . $filename;
            $file->move(public_path('uploads/blog'), $filePath);
            @unlink(public_path(('uploads/blog/') . $blog->image));
            $blog->image = $filename;
        }


        $blog->content = $request->content;
        // $blog->description = $request->description;
        $blog->save();
        return redirect()->route('view-blog')->with('success', 'Blog Updated Successfully');
    }


    public function destroy(Request $request)
    {

        $id = $request->id;
        $blog = Blog::findOrFail($id);
        @unlink(public_path(('uploads/blog/') . $blog->image));
        $blog->delete();
        return back()->with('success', 'Blog Deleted Successfully!');
    }
    public function view()
    {
        $data = Blog::orderBy('id')->paginate(5);
        return view('admin.blog.view-blog', compact('data'));
    }
}
