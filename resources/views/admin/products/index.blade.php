@extends('admin.layout.app')

@section('content')
<div class="app-content">
    <section class="section">
        <div class="container">
            <h1>Products</h1>
            <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Create Products</a>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>
                                <img src="{{ asset('uploads/product_img/' . $item->image) }}" alt="{{ $item->name }}" class="img-responsive" style="width: 100px;"/>
                            </td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->status }}</td>
                            <td>
                                <a href="{{ route('products.edit', $item->id) }}" class="btn btn-warning">Edit</a>

                                <!-- Delete Confirmation -->
                                <form action="{{ route('products.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this products?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection

