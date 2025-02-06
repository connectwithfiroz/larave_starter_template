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
                            <h4> Edit Banners </h4>
                        </div>
                        <div class="card-body">

                            <form enctype="multipart/form-data" role="form" id="" method="post"
                                action="{{ route('edit-banner', $data->id) }}">
                                @csrf
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" class="form-control" name="name" id="exampleInputEmail1"
                                            placeholder="Enter Name of the Banner " value="{{ $data->name }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">Banner </label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <td><img src="{{ URL::to('/') }}/uploads/banners/{{ $data->image }}"
                                                        alt="" class="img-responsive" width="5%"
                                                        height="5%" /></td>

                                                <input type="file" class="custom-file-input" name="image"
                                                    id="exampleInputFile" value="{{ $data->image }}">

                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- <div class="form-group">
												<label for="exampleInputFile">Banner 2 </label>
												<div class="input-group">
												  <div class="custom-file">
                                                    <td><img src="{{ URL::to('/') }}/uploads/banners/{{ $data->image2 }}" alt="" class="img-responsive" width="5%" height="5%" /></td>
													<input type="file" class="custom-file-input" name="image2" id="exampleInputFile" value="{{$data->image2}}">

													{{-- <input type="file" class="custom-file-input" id="exampleInputFile"> --}}
                                    {{-- <label class="custom-file-label" for="exampleInputFile">Choose file</label>
												  </div>
												  <div class="input-group-append">
													<span class="input-group-text">Upload</span>
												  </div>
												</div>
											  </div>

                                              <div class="form-group">
												<label for="exampleInputFile">Banner 3 </label>
												<div class="input-group">
												  <div class="custom-file">
                                                        <td><img src="{{ URL::to('/') }}/uploads/banners/{{ $data->image3 }}" alt="" class="img-responsive" width="5%" height="5%" /></td> --}}

                                    {{-- <input type="file" class="custom-file-input" name="image3" id="exampleInputFile" value="{{$data->image3}}">

													{{-- <input type="file" class="custom-file-input" id="exampleInputFile"> --}}
                                    {{-- <label class="custom-file-label"  for="exampleInputFile">Choose file</label>
												  </div>
												  <div class="input-group-append">
													<span class="input-group-text">Upload</span>
												  </div>
												</div>
											  </div> --}}

                                    {{-- </div> --}}

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
                                    <button type="submit" class="btn btn-primary">Update</button>
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
