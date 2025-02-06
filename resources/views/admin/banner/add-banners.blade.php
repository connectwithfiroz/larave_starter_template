@extends('admin.layout.app')
@section('content')
    <!--app-content open-->
    <div class="app-content">
        <section class="section">

            <!--row open-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="e-panel card">
                        <div class="card-header">
                            <h4> Add Banners </h4>
                        </div>
                        <div class="card-body">
                            @include('admin.layout.notifications')

                            <form enctype="multipart/form-data" role="form" method="post" action="{{ route('add-banner') }}">
                                @csrf
                                <div class="card-body">

                                    <!-- Banner Name Input -->
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                            name="name" id="name" placeholder="Enter Name of the Banner" required value="{{ old('name') }}">
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Banner Image Upload -->
                                    <div class="form-group">
                                        <label for="image">Banner</label>
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

                                    <!-- Banner Status Radio Buttons -->
                                    <div class="form-group">
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
@endsection
