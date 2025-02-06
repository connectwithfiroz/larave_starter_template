<?php
// Tested: add,edit,delete by Firoz ✅ 5/2/25 10:34pm
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Str;
use Illuminate\Support\Facades\Storage;

class AdminBannerController extends Controller
{

    public function index()
    {
        return view('admin.banner.add-banners');
    }

    public function create()
    {
        return view('admin.banner.add-banners');
    }


    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'name' => 'required',
            'image' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:5120', // 5MB file size limit
        ]);

        // Create the slug using Str::slug()
        $slug = Str::slug($request->name) . time();

        // Create a new Banner instance
        $banners = new Banner;
        $banners->name = $request->name;
        $banners->slug = $slug;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();  // Get the original file name
            
            // Save the file in 'uploads/banners' directory within the public storage
            $filePath = $file->storeAs('public/uploads/banners', $filename);
            
            // Save the file name in the database (relative path)
            $banners->image = $filename;
        }

        $banners->status = $request->status;

        // Check if slug already exists
        $checkSlug = Banner::whereSlug($slug)->exists();
        if (!$checkSlug) {
            // Save the banner if the slug is unique
            $banners->save();
            return redirect()->route('view-banner')->with('success', 'Banner Uploaded Successfully');
        } else {
            return back()->withInput()->with('error', 'Banner Name Already Exists');
        }
    }

    public function edit($id)
    {
        $data = Banner::find($id);
        return view('admin.banner.edit-banners', compact('data'));
    }

    public function update(Request $request, $id)
    {
        // Validate the input
        $request->validate([
            'name' => 'string',
            'image' => 'file|mimes:jpeg,png,jpg,gif,svg|max:5120', // 5MB file size limit
        ]);

        $banners = Banner::find($id);
        $banners->name = $request->name;

        if ($request->hasFile('image')) {
            // Delete the old file
            if (Storage::exists('public/uploads/banners/' . $banners->image)) {
                Storage::delete('public/uploads/banners/' . $banners->image);  // Delete the old image using Storage facade
            }

            // Upload the new file
            $file = $request->file('image');
            $fileName = "banner" . time() . "." . $file->getClientOriginalExtension();
            $file->storeAs('public/uploads/banners', $fileName);  // Store the file using storeAs()

            // Update the banner's image in the database
            $banners->image = $fileName;
        }

        $banners->status = $request->status;
        $banners->save();

        return redirect()->route('view-banner')->with('success', 'Banner Updated Successfully');
    }

    public function destroy(Request $request)
    {
        $id = $request->id;
        $banners = Banner::find($id);

        // Delete the image file from storage
        if (Storage::exists('public/uploads/banners/' . $banners->image)) {
            Storage::delete('public/uploads/banners/' . $banners->image);  // Delete the file from storage
        }

        // Delete the banner record
        $banners->delete();

        return back()->with('success', 'Banner Deleted Successfully!');
    }

    public function view()
    {
        $data = Banner::orderBy('id')->paginate(10);
        return view('admin.banner.view-banners', compact('data'));
    }

}
