@extends('admin.layout.app')
@section('content')
    <!--app-content open-->
    <div class="app-content">
        <section class="section">
            <!--page-header open-->
            <div class="page-header">
                <ol class="breadcrumb">
                    <!-- breadcrumb -->
                    <li class="breadcrumb-item active" aria-current="page"> Information </li>
                </ol>
                <!-- End breadcrumb -->
            </div>
            <!--page-header closed-->
            <!--row open-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="e-panel card">
                        <div class="card-header">
                            <h4> Add Testimonial </h4>
                        </div>
                        <div class="card-body">
                            @include('admin.layout.notifications')
                            <form enctype="multipart/form-data" method="POST" action="{{ route('add-testimonial') }}">
                                @csrf
                                <div class="card-body">

                                    <!-- Testimonial Name Input -->
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                            name="name" id="name" placeholder="Enter Name" value="{{ old('name') }}" required>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Testimonial Image Upload -->
                                    <div class="form-group">
                                        <label for="image">Testimonial Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input @error('image') is-invalid @enderror" 
                                                    name="image" id="image" accept="image/*" required>
                                                <label class="custom-file-label" for="image">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                        @error('image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Testimonial Details Textarea -->
                                    <div class="form-group">
                                        <label for="content">Testimonial Details</label>
                                        <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="4" required>{{ old('content') }}</textarea>
                                        @error('content')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Testimonial Status Radio Buttons -->
                                    <div class="form-group">
                                        <label>Status</label>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" id="statusActive" name="status" value="1" {{ old('status', '1') == '1' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="statusActive">Active</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" id="statusInactive" name="status" value="0" {{ old('status') == '0' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="statusInactive">Inactive</label>
                                        </div>
                                        @error('status')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>
                                <!-- Card Footer with Submit Button -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!--row closed-->
        </section>
    </div>
    <!--app-content closed-->
    <script>
        const quill = new Quill('#content', {
        theme: 'snow', // Options: 'snow' or 'bubble'
        });
    </script>
@endsection
