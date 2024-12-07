@extends('layouts.layouts')
@section('page_title')
    {{ "Add Post" }}
@endsection
@section('content')
    <div class="col-lg-8 mb-4">
        <form method="post" action="{{ route('post.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="card">
              <div class="card-header">
                <h3>New Post</h3>
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
                  <div class="form-group mb-4">
                    <label for="">Photo</label>
                    <input type="file" class="form-control" @error('image') is-invalid @enderror name="image">
    
                    @error('image')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Embed IG</label>
                    <input type="text" class="form-control" name="embed" value="{{ old('embed') }}" placeholder="#embed">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" value="{{ old('title') }}"  placeholder="Title">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Body</label>
                    <textarea class="summernote" name="body" id="summernote">
                        {{old('body')}}
                    </textarea>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Category</label>
                    @foreach ($categories as $categoryID => $categoryName)
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="category_ids[]" value="{{ $categoryID }}">
                        <label class="form-check-label">
                          {{ $categoryName }}
                        </label>
                      </div>
                    @endforeach
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Author</label>
                    <input type="text" class="form-control" name="author" value="{{ old('author') }}"  placeholder="Author">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Tag</label>
                    <input type="text" class="form-control" name="tag" value="{{ old('tag') }}"  placeholder="Tag">
                  </div>
              </div>
              <div class="card-footer">
                <button class="btn btn-primary" type="submit">Create</button>
              </div>
            </div>
          </form>
        </div>
@endsection