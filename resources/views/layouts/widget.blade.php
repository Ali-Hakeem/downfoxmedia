<div class="col-lg-4">
@auth<!-- Side widgets-->
    <!-- Side widget-->
    <div class="mt-4 text-uppercase fw-bold fst-italic text-white">Other Posts</div>
    <div class="list-unstyled mb-4 n" style="border-color: #000;">
        @foreach ($other as $index => $item)
            <li>
                <a class="d-flex gap-3 align-items-start align-items-lg-center py-2 link-body-emphasis text-decoration-none border-top" href="/article/{{$item->slug}}">
                    <img class="bd-placeholder-img" width="96" height="90" src="{{ asset('storage/images/' . $item->image)}}" alt="{{$item->image}}" aria-hidden="true">
                    <div class="col-lg-8">
                        <p class="fst-italic fw-bold">{{implode(', ', $item->categories->pluck('name')->toArray())}}</p>
                        <p>{{substr($item->title, 0, 52)}}..</p>
                    </div>
                </a>
            </li>
        @endforeach
    </div>
@else

    <div class="mt-2">
        @foreach ($spotify as $index => $items)
        <iframe style="border-radius:12px" 
            src="https://open.spotify.com/embed/playlist/{{$items->embed}}"
            width="100%" height="360" frameBorder="0" allowfullscreen="" 
            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" 
            loading="lazy">
        </iframe>
        @endforeach
    </div> 

    <!-- Side widget-->
    <div class="mt-4 text-uppercase fw-bold fst-italic text-white">Other Posts</div>
    <div class="list-unstyled mb-4 n" style="border-color: #000;">
        @foreach ($other as $index => $item)
            <li>
                <a class="d-flex gap-3 align-items-start align-items-lg-center py-2 link-body-emphasis text-decoration-none border-top" href="/article/{{$item->slug}}">
                    <img class="bd-placeholder-img" width="96" height="90" src="{{ asset('storage/images/' . $item->image)}}" alt="{{$item->image}}" aria-hidden="true">
                    <div class="col-lg-8">
                        <p> <span class="fst-italic fw-bold">{{implode(', ', $item->categories->pluck('name')->toArray())}}</span><br>
                        {{substr($item->title, 0, 70)}}..
                        </p>
                    </div>
                </a>
            </li>
        @endforeach
    </div>
@endauth
</div>