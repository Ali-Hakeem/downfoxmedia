@extends('layouts.layouts')
@section('page_title')
    {{ "Dashboard" }}
@endsection
@section('page_header')
    {{ "Dashboard" }}
@endsection
@section('content')
<div class="col-lg-8 mb-4">
          <div class="card">
            <div class="card-header">
              <h3>Dasboard</h3>
            </div>
            <div class="card-body">
                <a class="text-decoration-none" href="{{route('post.index')}}"><h4>Post</h4></a>
            </div>
          </div>
</div>
@endsection