@extends('admin.layout.app')
@section('content')
    <!-- Header End -->


    <!--app-content open-->
    <div class="app-content">
        <section class="section">

            <!--page-header open-->
            <div class="page-header">
                <ol class="breadcrumb">
                    <!-- breadcrumb -->
                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i>Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> View Banners </li>
                </ol><!-- End breadcrumb -->
                @include('admin.layout.notifications')
            </div>
            <!--page-header closed-->

            <!--row open-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card export-database">
                        <div class="card-header">
                            <h4> Banner Details </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example"
                                    class="table table-bordered table-responsive border-t0 key-buttons text-nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th> Sl No </th>
                                            <th> Name</th>
                                            <th> Banner </th>
                                            <th> Status</th>
                                            <th> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $row)
                                            <tr>
                                                <td> {{ $row->id }}</td>
                                                <td> {{ $row->name }} </td>
                                                <td>
                                                    <img src="{{ asset('storage/uploads/banners/' . $row->image) }}" 
                                                        alt="{{ $row->name }}" 
                                                        class="img-responsive" 
                                                        style="width: 20%;"/>
                                                </td>

                                                <td>{{ $row->status }}</td>
                                                <td>
                                                    <a href="{{ route('edit-banner', $row->id) }}" type="button"
                                                        class="btn btn-primary">Edit</a>
                                                    <a href="{{ route('delete-banner', ['id' => $row->id]) }}"
                                                        type="button" class="btn btn-danger">Delete</a>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{-- <div class = "row">
                                                {{ $row->links() }}
                                            </div> --}}
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
