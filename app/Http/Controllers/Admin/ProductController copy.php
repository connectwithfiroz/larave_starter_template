<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120', // 5MB max size
            'price' => 'required|integer',
        ]);
        $request_data = $request->all();
        // Handle the image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = "product_img_" . time() . '-' . preg_replace('/[^a-zA-Z0-9_.]/', '_', $file->getClientOriginalName());

            // $filename = "product_img_".time() . '-' . $file->getClientOriginalName();
            
            // Store the file in 'public/testimonials' directory
            $filePath = $file->storeAs('public/product_img', $filename);
            $request_data['image'] = $filename;
        }

        Product::create($request_data);
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {
        $products = Product::findOrFail($id);
        return view('admin.products.edit', compact('products'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120', // 5MB max size
            'price' => 'required|integer',
        ]);

        $request_data = $request->all();
        $products = Product::findOrFail($id);
        // If a new image is uploaded, delete the old one and upload the new one
        if ($request->hasFile('image')) {
            // Delete the old image from the storage
            if (!empty($products->image)) {
                Storage::delete('public/product_img/' . $products->image);
            }
        
            $file = $request->file('image');
        
            // Generate a unique filename with extension
            $extension = $file->getClientOriginalExtension(); // Get file extension
            $filename = uniqid('product_img_') . '_' . time() . '.' . $extension;
        
            // Store the new file
            $file->storeAs('public/product_img', $filename);
            $request_data['image'] = $filename; // Save the filename for the database
        }
        
        $products->update($request_data);
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $products = Product::findOrFail($id);
        $products->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
