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
                            <h4> Add Blog </h4>
                        </div>
                        <div class="card-body">
                            @include('admin.layout.notifications')
                            <form enctype="multipart/form-data" role="form" id="" method="post"
                                action="{{ route('add-blog') }}">
                                @csrf
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">name</label>
                                        <input type="text" class="form-control" name="title" id="exampleInputEmail1"
                                            placeholder="Enter Blog name ">
                                    </div>

                                    {{-- <div class="form-group">
                                       <label for="exampleInputFile">Blog banner Image </label>
                                       <div class="input-group">
                                          <div class="custom-file">
                                             <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                                             <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                          </div>
                                          <div class="input-group-append">
                                             <span class="input-group-text">Upload</span>
                                          </div>
                                       </div>
                                    </div> --}}

                                    <div class="form-group">
                                        <label for="exampleInputFile">Blog Image </label>
                                        <div class="input-group">
                                            <div class="custom-file">Image
                                                <input type="file" class="custom-file-input" name="image"
                                                    id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- <div class="form-group">
										<label for="exampleInputEmail1">Posted name</label>
										<input type="text" class="form-control" name="posted_name" id="exampleInputEmail1" placeholder="Enter Posted name ">
									</div> --}}

                                    {{-- <div class="form-group">
										<label for="exampleInputEmail1">Posted Date</label>
										<input type="text" class="form-control" name="posted_date" id="exampleInputEmail1" placeholder="Enter posted date ">
									</div> --}}


                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Blog Content</label>
                                        <textarea class="form-control" id="content" name="content" rows="4" cols="50">

										</textarea>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="exampleInputEmail1">Blog Description</label>
                                        <textarea class="form-control" id="content" name="description" rows="4" cols="50">

										</textarea>
                                    </div> -->
                                    <div class="form-group">
                                        <label for="chkYes">
                                            <input type="radio" class="status" value="Active" name="status" checked />
                                            @if ($errors->has('status'))
                                                <span class="required">
                                                    <strong>{{ $errors->first('status') }}</strong>
                                                </span>
                                            @endif
                                            Active
                                        </label>
                                        <label for="chkNo">
                                            <input type="radio" class="status" value="InActive" name="status" />
                                            @if ($errors->has('status'))
                                                <span class="required">
                                                    <strong>{{ $errors->first('status') }}</strong>
                                                </span>
                                            @endif
                                            Inactive
                                        </label>
                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" value="submit" class="btn btn-primary">Submit</button>
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
