@extends('layouts.layouts')
@section('page_title')
    {{ "Add Post" }}
@endsection
@section('content')
    <div class="col-lg-8 mb-4">
      <form method="post" action="{{ route('post.update', $product->id) }}">
        @method('PUT')
          @csrf
          <div class="card mt-5">
            <div class="card-header">
              <h3>Edit Post</h3>
            </div>
            <div class="card-body">
                @if ($errors->any())
                  <div class="alert alert-danger">
                    <div class="alert-title"><h4>Whoops!</h4></div>
                      There are some problems with your input.
                      <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                  </div> 
                @endif

                @if (session('success'))
                  <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if (session('error'))
                  <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                <div class="mb-3">
                  <label class="form-label">Embed</label>
                  <input type="text" class="form-control" name="embed" value="{{ old('embed', $product->embed) }}" placeholder="#SKU">
                </div>
                <div class="mb-3">
                  <label class="form-label">Title</label>
                  <input type="text" class="form-control" name="title" value="{{ old('title', $product->title) }}"  placeholder="Name">
                </div>
                <div class="mb-3">
                  <label class="form-label">Body</label>
                  <textarea class="summernote" name="body" id="summernote">
                      {{old('body', $product->body)}}
                  </textarea>
                </div>
                <div class="mb-3">
                  <label class="form-label">Category</label>
                  @php
                    $selectedCategoryIDs = $product->categories->pluck('id')->toArray();
                  @endphp
                  @foreach ($categories as $categoryID => $categoryName)
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="category_ids[]" value="{{ $categoryID }}" @checked(in_array($categoryID, $selectedCategoryIDs))>
                      <label class="form-check-label">
                        {{ $categoryName }}
                      </label>
                    </div>
                  @endforeach
                </div>
                <div class="mb-3">
                  <label class="form-label">Author</label>
                  <input type="text" class="form-control" name="author" value="{{ old('author', $product->author) }}"  placeholder="Name">
                </div>
                <div class="mb-3">
                  <label class="form-label">Tag</label>
                  <input type="text" class="form-control" name="tag" value="{{ old('tag', $product->tag) }}"  placeholder="Name">
                </div>
            </div>
            <div class="card-footer">
              <button class="btn btn-primary" type="submit">Update</button>
            </div>
          </div>
        </form>
        </div>
@endsection