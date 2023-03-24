<x-app-layout>
    <section>
       <div class="container">
        <div class="d-flex justify-content-between">
            <div>
                <h1>Create Category</h1>
            </div>
            <div>
                <a href="{{ route('category.index') }}" class="btn btn-primary btn-sm">Back</a>
            </div>
        </div>
        <form method="POST" action="{{ route('category.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Category Name</label>
                <input id="name" class="form-control" type="text" name="name" placeholder="eg. programming">
                <button type="submit" class="btn btn-primary btn-sm my-2">Save Record</button>
            </div>
        </form>
       </div>


    </section>
</x-app-layout>
