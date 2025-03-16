<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


class NewsController extends Controller
{
    private $image_path = 'uploads/product_img';
    public function index()
    {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120', // 5MB max size
            'youtube_url' => 'required|url',
            'description' => 'nullable',
        ]);
        $request_data = $request->all();
        // Handle the image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = "thumbnail_".time() . '-' . $file->getClientOriginalName();
            
            // Store the file in 'public/testimonials' directory
            $filePath = $file->storeAs('public/thumbnail', $filename);
            $request_data['thumbnail'] = $filename;
        }
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $filename = "thumbnail" . time() . '-' . preg_replace('/[^a-zA-Z0-9_.]/', '_', $file->getClientOriginalName());
            $filePath = $this->image_path . '/' . $filename;
            $file->move(public_path($this->image_path), $filePath);
            //dd($filename);
            $request_data['thumbnail'] = $filename;
        }

        News::create($request_data);
        return redirect()->route('news.index')->with('success', 'News created successfully.');
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('admin.news.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'youtube_url' => 'required|url',
            'description' => 'nullable',
        ]);
        $request_data = $request->all();

        $news = News::findOrFail($id);
        // If a new image is uploaded, delete the old one and upload the new one
        if ($request->hasFile('image')) {
            // Delete the old image from the storage
            Storage::delete('public/thumbnail/' . $news->image);

            $file = $request->file('image');
            $filename = time() . '-' . $file->getClientOriginalName();
            
            // Store the new file
            $file->storeAs('public/thumbnail', $filename);
            $request_data['thumbnail'] = $filename;
        }
        $news->update($request_data);
        return redirect()->route('news.index')->with('success', 'News updated successfully.');
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();
        return redirect()->route('news.index')->with('success', 'News deleted successfully.');
    }
}
