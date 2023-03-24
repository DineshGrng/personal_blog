<x-app-layout>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div>
                        <h1>Post</h1>
                    </div>
                    <div>
                        <a href="{{ route('post.create') }}" class="btn btn-primary btn-sm">ADD New</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered border-1">
                        <tbody>
                            <tr>
                                <th>id</th>
                                <th>title</th>
                                <th>description</th>
                                <th>tag</th>
                                <th>Category_id</th>
                                <th>Actions</th>
                            </tr>
                            @foreach ($posts as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->tag }}</td>
                                <td>{{ $item->category_id }}</td>
                                <td>
                                    <form method="post" action="{{ route('post.destroy', $item->id) }}">
                                        @csrf
                                        @method('delete')
                                        {{-- {{ route('post.show') }} --}}
                                        <a href="" class="btn btn-info btn-sm">
                                            show
                                        </a>
                                        {{-- {{ route('post.edit', $item->id) }} --}}
                                        <a href="" class="btn btn-primary btn-sm">
                                            edit
                                        </a>
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            Delete
                                        </button>
                                    </form>
                                </td>

                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
