@extends('layouts.layouts')
@section('page_title')
    {{ "Downfall Music" }}
@endsection
@section('page_header')
    {{ "New Bands" }}
@endsection
@section('content')
    <!-- Blog entries-->
    <div class="col-lg-8">
        <!-- Nested row for non-featured blog posts-->
        <div class="row  justify-content-md-center">
            <div class="col-lg">
                    <!-- Blog post-->
                    @foreach ($news as $index => $item)
                    <div class="card mb-4 rounded-0">
                        <div class="card-body">
                            <h2 class="card-title h4 fw-bold"><a class="text-decoration-none text-black" href="/{{$item->slug}}">{{$item->title}}</a></h2>
                            <span class="medium text-muted">By {{$item->author}} | {{date('d/m/Y', strtotime($item->created_at))}}</span><hr>
                        <a class="text-decoration-none text-black" href="/{{$item->slug}}">
                            <div class="p-2 img-fluid" style="margin-bottom: -45px;"><blockquote class="instagram-media" data-instgrm-permalink="{{$item->embed}}" data-instgrm-version="14" 
                                style=" background:#FFF; border:0; border-radius:0; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; padding:0; width:99.375%; width:-webkit-calc(40% - 2px); width:calc(100% - 2px);">
                                </blockquote>
                                <script async src="//www.instagram.com/embed.js"></script>
                            </div>
                        </a>
                        </div>
                        <div class="card-body">
                            <hr>
                            <p class="card-text">{!! substr($item->body, 0, 120)!!}...</p>
                            <a class="text-decoration-none text-black" href="/{{$item->slug}}">
                                <h5 class="float-end fw-bold">Read more</h5>
                            </a>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
        <!-- Pagination-->
        <div class="justify-content-center">{{ $news->links('vendor.pagination.bootstrap-5') }}</div>
    </div>
@endsection