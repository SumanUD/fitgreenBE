<div class="form-group">
    <label>Title</label>
    <input type="text" name="title" class="form-control" value="{{ old('title', $blog->title ?? '') }}" required>
</div>

<div class="form-group">
    <label>Meta Title</label>
    <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title', $blog->meta_title ?? '') }}">
</div>

<div class="form-group">
    <label>Meta Description</label>
    <textarea name="meta_description" class="form-control">{{ old('meta_description', $blog->meta_description ?? '') }}</textarea>
</div>

<div class="form-group">
    <label>Tags (comma separated)</label>
    <input type="text" name="tags" class="form-control" value="{{ old('tags', $blog->tags ?? '') }}">
</div>

<div class="form-group">
    <label>Blog Image</label>
    <input type="file" name="image" class="form-control">

    @if(!empty($blog->image))
        <img src="{{ asset('storage/'.$blog->image) }}" width="120" class="mt-2">
    @endif
</div>

<div class="form-group">
    <label>Description</label>
    <textarea name="description" id="editor" class="form-control" rows="6">
        {{ old('description', $blog->description ?? '') }}
    </textarea>
</div>

<button class="btn btn-success">Save</button>

@section('js')
    <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>
@endsection
