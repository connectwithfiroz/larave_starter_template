@extends('admin.layout.app')

@section('content')
<div class="app-content">
    <section class="section">
        <div class="container">
            <h1>Edit News</h1>
            <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ $news->title }}" required>
                </div>
                <!-- Testimonial Image Upload -->
                <div class="form-group">
                    <label for="image">Thumbnail Image</label>
                    <input type="file" class=" @error('image') is-invalid @enderror" 
                    name="image" id="image" accept="image/*" required>
                   
                    @error('image')
                        <div class=" text-danger">{{ $message }}</div>
                    @enderror
                   
                    @if ($news->thumbnail)
                        <div class="mt-2">
                            <img src="{{ asset('uploads/thumbnail/' . $news->thumbnail) }}" 
                                alt="Current Image" width="100">
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="youtube_url" class="form-label">YouTube URL</label>
                    <input type="url" name="youtube_url" id="youtube_url" class="form-control" value="{{ $news->youtube_url }}" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control">{{ $news->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </section>
</div>
@endsection

