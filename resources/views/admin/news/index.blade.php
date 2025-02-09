@extends('admin.layout.app')

@section('content')
<div class="app-content">
    <section class="section">
        <div class="container">
            <h1>News</h1>
            <a href="{{ route('news.create') }}" class="btn btn-primary mb-3">Create News</a>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Thumbnail</th>
                        <th>YouTube URL</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($news as $item)
                        <tr>
                            <td>{{ $item->title }}</td>
                            <td>
                                <img src="{{ asset('storage/thumbnail/' . $item->thumbnail) }}" alt="{{ $item->name }}" class="img-responsive" style="width: 100px;"/>

                            </td>
                            <td><a href="{{ $item->youtube_url }}" target="_blank">{{ $item->youtube_url }}</a></td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <a href="{{ route('news.edit', $item->id) }}" class="btn btn-warning">Edit</a>

                                <!-- Delete Confirmation -->
                                <form action="{{ route('news.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this news?');">Delete</button>
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

