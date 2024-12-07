@extends('layouts.layouts')
@section('page_title')
    {{ "Downfall Music" }}
@endsection
@section('content')

@include('layouts.carousel')
    <!-- Blog entries-->
    <div class="col-lg-8">
        <!-- Nested row for non-featured blog posts-->
        <div class="row  justify-content-md-center">
            <div class="col-lg">
                    <!-- Blog post-->
                    @foreach ($list as $index => $item)
                    <div class="card mb-4 rounded-0">
                        <div class="card-body">
                            <h2 class="card-title h4 text-black fw-bold"><a class="text-decoration-none text-black" href="/article/{{$item->slug}}">{{$item->title}}</a></h2>
                            <span class="medium text-muted">By {{$item->author}} | {{date('d/m/Y', strtotime($item->created_at))}}</span><hr>
                            <a class="text-decoration-none text-black crop" href="/article/{{$item->slug}}">
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
                    

                    <!-- band -->
                    <section class="band">
                        <h4 class="card-title h4 text-center text-uppercase fw-bold fst-italic">Band Spotlight</h4>
                        @foreach ($band as $index => $item)
                        <div class="card mb-4 rounded-0">
                            <div class="card-body">
                            <a class="text-decoration-none text-black" href="/article/{{$item->slug}}">
                                <div class="img-fluid">
                                    <img class="img-fluid" src="{{ asset('storage/images/' . $item->image)}}" alt="{{$item->image}}">
                                </div>
                            </a>
                            </div>
                            <div class="card-body">
                                <h2 class="mt-2 card-title bokor-regular fw-bold">{{$item->title}}</h2>
                                <p class="card-text">{!! substr($item->body, 0, 350)!!}...</p>
                                <a class="text-decoration-none text-center btn btn-dark" href="/article/{{$item->slug}}">
                                    <h5 class="text-black fw-bold">Read more</h5>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </section>

                    <!--Features-->
                    <div class="mt-2 mb-2 text-uppercase fw-bold fst-italic text-white">Features</div>
                        <div class="row"> 
                            @foreach ($features as $index => $item)
                                <div class="col-lg-6 col-md-6 col mb-4">
                                <div class="mb-4 rounded-0">
                                    <a class="text-decoration-none" href="/article/{{$item->slug}}">
                                        <img class="img-fluid" src="{{ asset('storage/images/' . $item->image)}}" alt="{{$item->image}}">
                                        <h5 class="text-white fw-bold mt-2">{{$item->title}}</h5>
                                        <p class="text-decoration-none text-white mini">{!! substr($item->body, 0, 120)!!}...</p>
                                    </a>
                                </div>
                                </div>
                            @endforeach
                        </div>
                        

                        <!--interview-->
                        <div class="mt-4 mb-2 text-uppercase fw-bold fst-italic text-white">Interview</div>
                        <div class="row"> 
                            @foreach ($interview as $index => $item)
                                <div class="col-lg-6 col-md-6 col mb-4">
                                <div class="mb-4 rounded-0">
                                    <a class="text-decoration-none" href="/article/{{$item->slug}}">
                                        <img class="img-fluid" src="{{ asset('storage/images/' . $item->image)}}" alt="{{$item->image}}">
                                        <h5 class="text-white fw-bold mt-2">{{$item->title}}</h5>
                                        <p class="text-decoration-none text-white mini">{!! substr($item->body, 0, 120)!!}...</p>
                                    </a>
                                </div>
                                </div>
                            @endforeach
                        </div>

                            <!--gigs-->
                        <div class="mt-4 mb-2 text-uppercase fw-bold fst-italic text-white">Local Gigs</div>
                        <div class="row"> 
                            @foreach ($gigs as $index => $item)
                                <div class="col-lg-6 col-md-6 col mb-4">
                                    <div class="mb-4 rounded-0">
                                        <a class="text-decoration-none" href="/article/{{$item->slug}}">
                                            <img class="img-fluid" src="{{ asset('storage/images/' . $item->image)}}" alt="{{$item->image}}">
                                            <h5 class="text-white fw-bold mt-2">{{$item->title}}</h5>
                                            <p class="text-decoration-none text-white mini">{!! substr($item->body, 0, 120)!!}...</p>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                            <!--release-->
                        <div class="mt-4 mb-2 text-uppercase fw-bold fst-italic text-white">release</div>
                        <div class="row"> 
                            @foreach ($interview as $index => $item)
                                <div class="col-lg-6 col-md-6 col mb-5">
                                <div class="mb-4 rounded-0">
                                    <a class="text-decoration-none" href="/article/{{$item->slug}}">
                                        <img class="img-fluid" src="{{ asset('storage/images/' . $item->image)}}" alt="{{$item->image}}">
                                        <h5 class="text-white fw-bold mt-2">{{$item->title}}</h5>
                                        <p class="text-decoration-none text-white mini">{!! substr($item->body, 0, 120)!!}...</p>
                                    </a>
                                </div>
                                </div>
                            @endforeach
                        </div>
            </div>
        </div>
    </div>
@endsection