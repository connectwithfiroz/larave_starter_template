@extends('admin.layout.app')

@section('content')
<div class="app-content">
    <section class="section">
        <div class="container">
            <h1>Edit News</h1>
            <form action="{{ route('products.update', $products->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Title</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $products->name }}" required>
                    @error('name') <div class=" text-danger">{{ $message }}</div>@enderror
                </div>
                <!-- Image Upload -->
                <div class="form-group">
                    <label for="image">Product Image</label>
                    <input type="file" class=" @error('image') is-invalid @enderror" 
                    name="image" id="image" accept="image/*">
                   
                    @error('image') <div class=" text-danger">{{ $message }}</div>@enderror
                   
                    @if ($products->image)
                        <div class="mt-2">
                            <img src="{{ asset('uploads/product_img/' . $products->image) }}" 
                                alt="Current Image" width="100">
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" step="1" name="price" id="price" class="form-control" value="{{ $products->price }}" required>
                    @error('price') <div class=" text-danger">{{ $message }}</div>@enderror
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </section>
</div>
@endsection

