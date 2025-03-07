<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    private $image_path = 'uploads/thumbnail';

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

        $request_data = $request->except('image'); // Exclude image temporarily

        // Handle the image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = "thumbnail" . time() . '-' . preg_replace('/[^a-zA-Z0-9_.]/', '_', $file->getClientOriginalName());

            // Store in public/uploads/product_img
            $file->move(public_path($this->image_path), $filename);

            // Save only the filename to the database
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
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:5120', // Optional image validation
        ]);

        $news = News::findOrFail($id);
        $request_data = $request->except('image'); // Exclude image temporarily

        // If a new image is uploaded, delete the old one and upload the new one
        if ($request->hasFile('image')) {
            // Delete old image if exists
            $oldImagePath = public_path($this->image_path . '/' . $news->thumbnail);
            if (!empty($news->thumbnail) && file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }

            // Upload new image
            $file = $request->file('image');
            $filename = "thumbnail" . time() . '-' . preg_replace('/[^a-zA-Z0-9_.]/', '_', $file->getClientOriginalName());
            $file->move(public_path($this->image_path), $filename);

            // Save only the filename to the database
            $request_data['thumbnail'] = $filename;
        }

        $news->update($request_data);

        return redirect()->route('news.index')->with('success', 'News updated successfully.');
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);

        // Delete the associated image if exists
        if (!empty($news->thumbnail)) {
            $imagePath = public_path($this->image_path . '/' . $news->thumbnail);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $news->delete();

        return redirect()->route('news.index')->with('success', 'News deleted successfully.');
    }
}
