<x-app-layout>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h1>Categories</h1>
                    <a href="{{ route('category.create') }}" class="btn btn-primary btn-sm">Add New</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered border-1">
                        <tbody>
                            <tr>
                                <th>S.N</th>
                                <th>Category</th>
                                <th>slug</th>
                                <th>Action</th>

                            </tr>
                            @foreach ($categories as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->slug }}</td>
                                    <td>
                                        <form action="{{ route('category.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                           <a href="{{ route('category.edit', $item->id) }}" class="btn btn-primary btn-sm">edit</a>
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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
