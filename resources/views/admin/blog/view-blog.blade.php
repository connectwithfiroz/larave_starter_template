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
                    <li class="breadcrumb-item active" aria-current="page"> Blog </li>
                </ol><!-- End breadcrumb -->
                @include('admin.layout.notifications')
            </div>
            <!--page-header closed-->

            <!--row open-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card export-database">
                        <div class="card-header">
                            <h4> View Blog/'s Details </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-bordered border-t0 key-buttons text-nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th> Sl No </th>
                                            <th> Action </th>
                                            <th> Name</th>
                                            <th> Poster Image </th>
                                            <th> Content </th>
                                            <th> Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $key=>$row)
                                            <tr>
                                                <td> {{ $key+1 }}</td>
                                                <td>
                                                    <a href="{{ route('edit-blog', $row->id) }}" type="button"
                                                        class="btn btn-primary">Edit</a>
                                                    <a href="{{ route('delete-blog', ['id' => $row->id]) }}" type="button"
                                                        class="btn btn-danger">Delete</a>
                                                </td>
                                                <td> {{ $row->title }} </td>

                                                <td><img src="{{ URL::to('/') }}/uploads/blog/{{ $row->image }}"
                                                        alt="" class="img-responsive" width="100%" /></td>
                                                <td> {{\Illuminate\Support\Str::limit(strip_tags($row->content), 50)}} </td>

                                                <td>{{ $row->description }}</td>


                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {!! $data->links("pagination::bootstrap-4") !!}
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
