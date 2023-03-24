<x-app-layout>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div>
                       <h1> Edit Post</h1>
                    </div>
                    <div>
                        <a href="route('post.index')" class="btn btn-primary btn-sm">Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Post Title</label>
                                    <input id="title" class="form-control" type="text" name="title" value="{{ $post->title }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tag">Tag</label>
                                    <input id="tag" class="form-control" type="text" name="tag" value="{{ $post->tag }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="description">Post Description</label>
                                    <textarea id="description" class="summernote" name="description" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category_id">Choose Category</label>
                                    <select id="category_id" class="form-control" name="category_id">
                                        @foreach ($categories as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>

                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                               <div class="form-group">
                                <label for="image">upload image</label>
                                <input id="image" class="form-control-file" type="file" name="image">
                               </div>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-success btn-sm">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
</x-app-layout>
