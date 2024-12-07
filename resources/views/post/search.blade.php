@extends('layouts.layouts')
@section('page_title')
    {{ "Downfall Music" }}
@endsection
@section('page_header')
    {{ "Search" }}
@endsection
@section('content')
    <!-- Blog entries-->
    <div class="col-lg-8 mt-2">
        <!-- Nested row for non-featured blog posts-->
        <div class="row  justify-content-md-center">
            <div class="col-lg">
                    <!-- Blog post-->
                    @foreach ($band as $index => $item)
                    <div class="card mb-4 rounded-0">
                        <div class="card-body">
                            <h2 class="card-title h4 text-black fw-bold"><a class="text-decoration-none text-black" href="/article/{{$item->slug}}">{{$item->title}}</a></h2>
                            <span class="medium text-muted">By {{$item->author}} | {{date('d/m/Y', strtotime($item->created_at))}}</span><hr>
                            <a class="text-decoration-none text-black" href="{{ asset('storage/images/' . $item->image)}}">
                                <img class="img-fluid" src="{{ asset('storage/images/' . $item->image)}}" alt="{{$item->image}}">
                            </a>
                            <hr>
                            <p class="card-text">{!! substr($item->body, 0, 150)!!}...</p>
                            <a class="text-decoration-none text-black" href="/article/{{$item->slug}}">
                                <h5 class="float-end text-black fw-bold">Read more</h5>
                            </a>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
        <!-- Pagination-->
        <div class="justify-content-center">{{ $band->links('vendor.pagination.bootstrap-5') }}</div>
    </div>
@endsection