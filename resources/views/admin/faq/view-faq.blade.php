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
                    <li class="breadcrumb-item active" aria-current="page"> View HR </li>
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
                            <h4> View FAQ </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-bordered border-t0 key-buttons text-nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th> Sl No </th>
                                            <th> FAQ Question 1 </th>
                                            <th> Ans</th>
                                            <th> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $row)
                                            <tr>
                                                <td> {{ $row->id }}</td>
                                                <td> {{ $row->question }} </td>
                                                <td> {!! $row->answer !!}</td>
                                                <td>
                                                    <a href="{{ route('edit-faq', $row->id) }}" type="button"
                                                        class="btn btn-primary">Edit</a>
                                                    <a href="{{ route('delete-faq', ['id' => $row->id]) }}" type="button"
                                                        class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
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
