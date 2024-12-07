@extends('layouts.layouts')
@section('page_title')
    {{ "List Post" }}
@endsection
@section('content')
    <div class="col-lg-8 mb-4">
        <div class="main-content">
              <div class="card">
                <div class="card-header">
                  <h3>List Post</h3>
                </div>
                <div class="card-body">
                  @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                  @endif
  
                  @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                  @endif
                  <p>
                    <a class="btn btn-primary rounded-0" href="{{ route('post.create') }}">New Post</a>
                  </p>
                  <div class="table-responsive">
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Body</th>
                        <th>Categories</th>
                        <th>Published</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($posts as $product)
                        <tr>
                          <td>{{ $product->id }}</td>
                          <td>{{ $product->title }}</td>
                          <td>{!! substr($product->body, 0, 20) !!}</td>
                          <td>{{ implode(', ', $product->categories->pluck('name')->toArray()) }}</td>
                          <td>{{ $product->created_at }}</td>
                          <td>
                            <a href="{{ route('post.edit', ['id' => $product->id]) }}" class="btn btn-secondary btn-sm">edit</a>
                            <a href="#" class="btn btn-sm btn-danger" onclick="
                              event.preventDefault();
                              if (confirm('Do you want to remove this?')) {
                                document.getElementById('delete-row-{{ $product->id }}').submit();
                              }">
                              delete
                            </a>
                            <form id="delete-row-{{ $product->id }}" action="{{ route('post.destroy', ['id' => $product->id]) }}" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                @csrf
                            </form>
                          </td>
                        </tr>
                      @empty
                        <tr>
                          <td colspan="8">
                              No record found!
                          </td>
                        </tr>
                      @endforelse
                    </tbody>
                  </table>
                  </div>
                </div>
            </div>
          </div>
    </div>
@endsection