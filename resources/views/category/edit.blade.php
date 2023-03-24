<x-app-layout>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                         <div>
                            <h1>edit Category</h1>
                        </div>
                        <div>
                            <a href="{{ route('category.index') }}" class="btn btn-primary btn-sm">back</a>
                        </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('category.update',$category->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name">Category Name</label>
                            <input id="name" class="form-control" type="text" name="name" value="{{ $category->name }}">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Update Record</button>
                    </form>

                </div>
            </div>
        </div>
    </section>
</x-app-layout>
