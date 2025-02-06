<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AdminTestimonialController extends Controller
{
    public function index()
    {
        return view('admin.testimonial.add-testimonial');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120', // 5MB max size
            'content' => 'required',
        ]);

        // Generate a unique slug for the testimonial
        $slug = Str::slug($request->name) . '-' . time();

        // Create a new Testimonial instance
        $testimonial = new Testimonial;
        $testimonial->slug = $slug;
        $testimonial->name = $request->name;

        // Handle the image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '-' . $file->getClientOriginalName();
            
            // Store the file in 'public/testimonials' directory
            $filePath = $file->storeAs('public/testimonials', $filename);
            $testimonial->image = $filename;
        }

        // Save the content and status
        $testimonial->content = $request->content;
        $testimonial->status = $request->status;
        
        // Save the testimonial to the database
        $testimonial->save();

        return redirect()->route('view-testimonial')->with('success', 'Testimonial Upload Successful');
    }

    public function edit($id)
    {
        $data = Testimonial::find($id);
        return view('admin.testimonial.edit-testimonial', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'content' => 'required',
        ]);

        $testimonial = Testimonial::find($id);

        // If a new image is uploaded, delete the old one and upload the new one
        if ($request->hasFile('image')) {
            // Delete the old image from the storage
            Storage::delete('public/testimonials/' . $testimonial->image);

            $file = $request->file('image');
            $filename = time() . '-' . $file->getClientOriginalName();
            
            // Store the new file
            $file->storeAs('public/testimonials', $filename);
            $testimonial->image = $filename;
        }

        // Update the testimonial details
        $testimonial->name = $request->name;
        $testimonial->content = $request->content;
        $testimonial->status = $request->status;
        
        // Save the updated testimonial
        $testimonial->save();

        return redirect()->route('view-testimonial')->with('success', 'Testimonial Updated Successfully');
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);

        // Delete the image file from storage
        Storage::delete('public/testimonials/' . $testimonial->image);
        
        // Delete the testimonial from the database
        $testimonial->delete();

        return back()->with('success', 'Testimonial Deleted Successfully!');
    }

    public function view()
    {
        $data = Testimonial::orderBy('id')->paginate(10);
        return view('admin.testimonial.view-testimonial', compact('data'));
    }
}
