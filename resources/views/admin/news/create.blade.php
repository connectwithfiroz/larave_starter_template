@extends('admin.layout.app')

@section('content')
<!--app-content open-->
<div class="app-content">
    <section class="section">
        <div class="container">
            <h1>Create News</h1>
            <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="title" class="form-control" required>
                </div>
                <!-- Thumbnail Image Upload -->
                <div class="mb-3">
                    <label for="image">Thumbnail Image</label>
                    <input type="file" class="" 
                    name="image" id="image" accept="image/*" required>
                   
                    @error('image')
                        <div class=" text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="youtube_url" class="form-label">YouTube URL</label>
                    <input type="url" name="youtube_url" id="youtube_url" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
</div>
@endsection
