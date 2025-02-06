@extends('admin.layout.app')
@section('content')
    <!--app-content open-->
    <div class="app-content">
        <section class="section">
            <!--page-header open-->
            <div class="page-header">
                <ol class="breadcrumb">
                    <!-- breadcrumb -->
                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i>Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> View Testimonials </li>
                </ol>
                <!-- End breadcrumb -->
                @include('admin.layout.notifications')
            </div>
            <!--page-header closed-->
            <!--row open-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card export-database">
                        <div class="card-header">
                            <h4> View Testimonial </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-bordered border-t0 key-buttons text-nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th> Sl No </th>
                                            <th> Action </th>
                                            <th> Name </th>
                                            <th> Testimonial Image</th>
                                            <th> Testimonial Details </th>
                                            <th> Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $row)
                                            <tr>
                                                <td> {{ $row->id }}</td>
                                                <td>
                                                    <a href="{{ route('edit-testimonial', $row->id) }}" type="button"
                                                        class="btn btn-primary">Edit</a>
                                                    <a href="{{ route('delete-testimonial', ['id' => $row->id]) }}"
                                                        type="button" class="btn btn-danger">Delete</a>
                                                </td>                                                <td> {{ $row->name }}</td>
                                                <td>
                                                <img src="{{ asset('storage/testimonials/' . $row->image) }}" 
                                                    alt="{{ $row->name }}" 
                                                    class="img-responsive" 
                                                    style="width: 100%;"/>

                                                    </td>

                                                <td> {!! $row->content !!}</td>
                                                <td> {{ $row->status }}</td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                <!-- {!! $data->links("pagination::bootstrap-4") !!} -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--row closed-->
        </section>
    </div>
    <!--app-content closed-->
@endsection
