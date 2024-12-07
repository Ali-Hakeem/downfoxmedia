<div id="hero-carousel" class="carousel slide mb-4" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
    </div>

    <div class="carousel-inner">
      @foreach ($carousel as $index => $item)
      <div class="carousel-item active c-item">
          <a class="text-decoration-none" href="/article/{{$item->slug}}">
            <img class="d-block w-100 c-img" src="{{ asset('storage/images/' . $item->image)}}" alt="{{$item->image}}">
            <div class="carousel-caption top-0 mt-4">
              <p class="bokor-regular fw-bold fs-3 mt-2">{{$item->title}}</p>
              <p class="text-decoration-none text-white" style="font-size: 10px">{!! substr($item->body, 0, 210)!!}...</p>
          </div>
          </a>
      </div>
      @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
      <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
      <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
      <span class="visually-hidden">Next</span>
    </button>
  </div>