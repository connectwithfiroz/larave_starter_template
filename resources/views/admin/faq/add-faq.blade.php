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
                            <h4> Add FAQ </h4>
                        </div>
                        <div class="card-body">
                            @include('admin.layout.notifications')
                            <form enctype="multipart/form-data" role="form" id="" method="post"
                                action="{{ route('add-faq') }}">
                                @csrf
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">FAQ Question </label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="question"
                                            placeholder="Enter FAQ Question">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">FAQ Answer</label>
                                        <textarea class="form-control" id="content" name="answer" rows="4" cols="50">

										</textarea>
                                    </div>
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
                                <!-- /.card-body -->
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
