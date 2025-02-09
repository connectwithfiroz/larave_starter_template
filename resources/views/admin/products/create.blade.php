@extends('admin.layout.app')

@section('content')
<!--app-content open-->
<div class="app-content">
    <section class="section">
        <div class="container">
            <h1>Create Products</h1>
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Product Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Product Name</label>
                    <input 
                        type="text" 
                        name="name" 
                        id="name" 
                        class="form-control" 
                        placeholder="Enter the product name" 
                        value="{{ old('name') }}" 
                        required>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Thumbnail Image Upload -->
                <div class="mb-3">
                    <label for="image">Product Image</label>
                    <input 
                        type="file" 
                        class="form-control" 
                        name="image" 
                        id="image" 
                        accept="image/*" 
                        required>
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Price -->
                <div class="mb-3">
                    <label for="price" class="form-label">Price for 1 Unit</label>
                    <input 
                        type="number" 
                        step="1" 
                        name="price" 
                        id="price" 
                        class="form-control" 
                        placeholder="Enter the product price (e.g., 100)" 
                        value="{{ old('price') }}" 
                        required>
                    @error('price')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Banner Status Radio Buttons -->
                <div class="mb-3">
                    <label for="status">Status</label>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="statusActive" name="status" value="Active" 
                            {{ old('status', 'Active') == 'Active' ? 'checked' : '' }}>
                        <label class="form-check-label" for="statusActive">Active</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="statusInactive" name="status" value="InActive" 
                            {{ old('status') == 'InActive' ? 'checked' : '' }}>
                        <label class="form-check-label" for="statusInactive">Inactive</label>
                    </div>
                    @error('status')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </section>
</div>
@endsection
