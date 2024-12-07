<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" type="image/x-icon" href="{{url('/')}}/storage/assets/icons/logo.ico">

        <title>@yield('page_title', 'Downfall Music')</title>

        <link rel="stylesheet" href="{{url('/')}}/assets/css/style.css">
        <script src="https://use.fontawesome.com/a03fb08303.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>
    </head>
    <body style="background-color: #000;">
        @include('layouts.navbar')
        <div>
            <div class="row">

                @yield('content')
                
                @include('layouts.widget')

            </div>
        </div>


        <footer class="text-center text-white">
            <!-- Grid container -->
            <div class="container">
              <!-- Section: Links -->
              <section class="mt-5">
                <!-- Grid row-->
                <div class="row text-center d-flex justify-content-center pt-5">
                  <!-- Grid column -->
                  <div class="col-md-2">
                    <h6 class="fw-bold text-uppercase font-weight-bold">
                      <a href="#!" class="text-white">About us</a>
                    </h6>
                  </div>
                  <!-- Grid column -->
        
                  <!-- Grid column -->
                  <div class="col-md-2">
                    <h6 class="fw-bold text-uppercase font-weight-bold">
                      <a href="#!" class="text-white">Merch</a>
                    </h6>
                  </div>
                  <!-- Grid column -->
        
                  <!-- Grid column -->
                  <div class="col-md-2">
                    <h6 class="fw-bold text-uppercase font-weight-bold">
                      <a href="#!" class="text-white">Help</a>
                    </h6>
                  </div>
                  <!-- Grid column -->
        
                  <!-- Grid column -->
                  <div class="col-md-2">
                    <h6 class="fw-bold text-uppercase font-weight-bold">
                      <a href="/contact" class="text-white">Contact</a>
                    </h6>
                  </div>
                  <!-- Grid column -->
                </div>
                <!-- Grid row-->
              </section>
              <!-- Section: Links -->
        
              <hr class="my-5" />
        
              <!-- Section: Text -->
              <!--<section class="mb-5">
                <div class="row d-flex justify-content-center">
                  <div class="col-lg-8">
                    <p>
                      Downfall Music Magazine is a
                    </p>
                  </div>
                </div>
              </section>-->
              <!-- Section: Text -->
        
              <!-- Section: Social -->
              <section class="text-center mb-5 n">
                <a href="https://www.instagram.com/downfall.magazine/" class="text-white me-4">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0,0,256,256">
                        <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(10.66667,10.66667)"><path d="M8,3c-2.757,0 -5,2.243 -5,5v8c0,2.757 2.243,5 5,5h8c2.757,0 5,-2.243 5,-5v-8c0,-2.757 -2.243,-5 -5,-5zM8,5h8c1.654,0 3,1.346 3,3v8c0,1.654 -1.346,3 -3,3h-8c-1.654,0 -3,-1.346 -3,-3v-8c0,-1.654 1.346,-3 3,-3zM17,6c-0.55228,0 -1,0.44772 -1,1c0,0.55228 0.44772,1 1,1c0.55228,0 1,-0.44772 1,-1c0,-0.55228 -0.44772,-1 -1,-1zM12,7c-2.757,0 -5,2.243 -5,5c0,2.757 2.243,5 5,5c2.757,0 5,-2.243 5,-5c0,-2.757 -2.243,-5 -5,-5zM12,9c1.654,0 3,1.346 3,3c0,1.654 -1.346,3 -3,3c-1.654,0 -3,-1.346 -3,-3c0,-1.654 1.346,-3 3,-3z"></path></g></g>
                    </svg>
                </a>
                <a href="" class="text-white me-4">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0,0,256,256">
                        <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(10.66667,10.66667)"><path d="M2.36719,3l7.0957,10.14063l-6.72266,7.85938h2.64063l5.26367,-6.16992l4.31641,6.16992h6.91016l-7.42187,-10.625l6.29102,-7.375h-2.59961l-4.86914,5.6875l-3.97266,-5.6875zM6.20703,5h2.04883l9.77734,14h-2.03125z"></path></g></g>
                    </svg>
                </a>
                <a href="" class="text-white me-4">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0,0,256,256">
                      <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(10.66667,10.66667)"><path d="M12,2c-5.5,0 -10,4.5 -10,10c0,5.5 4.5,10 10,10c5.5,0 10,-4.5 10,-10c0,-5.5 -4.5,-10 -10,-10zM16.057,16.406c-0.188,0 -0.282,-0.094 -0.47,-0.188c-1.411,-0.847 -3.198,-1.317 -5.079,-1.317c-1.035,0 -2.163,0.188 -3.104,0.376c-0.188,0 -0.376,0.094 -0.47,0.094c-0.376,0 -0.658,-0.282 -0.658,-0.658c0,-0.376 0.188,-0.658 0.564,-0.658c1.223,-0.282 2.446,-0.47 3.763,-0.47c2.163,0 4.139,0.564 5.832,1.505c0.188,0.188 0.376,0.282 0.376,0.658c-0.19,0.47 -0.472,0.658 -0.754,0.658zM17.091,13.773c-0.188,0 -0.376,-0.094 -0.564,-0.188c-1.599,-1.035 -3.857,-1.599 -6.302,-1.599c-1.223,0 -2.352,0.188 -3.198,0.376c-0.188,0.094 -0.282,0.094 -0.47,0.094c-0.47,0 -0.753,-0.376 -0.753,-0.753c0,-0.47 0.188,-0.658 0.658,-0.847c1.129,-0.282 2.258,-0.564 3.857,-0.564c2.634,0 5.079,0.658 7.149,1.881c0.282,0.188 0.47,0.47 0.47,0.753c-0.094,0.47 -0.376,0.847 -0.847,0.847zM18.314,10.762c-0.188,0 -0.282,-0.094 -0.564,-0.188c-1.881,-1.035 -4.609,-1.693 -7.243,-1.693c-1.317,0 -2.728,0.188 -3.951,0.47c-0.188,0 -0.282,0.094 -0.564,0.094c-0.564,0.095 -0.941,-0.376 -0.941,-0.94c0,-0.564 0.282,-0.847 0.658,-0.941c1.506,-0.376 3.105,-0.564 4.798,-0.564c2.916,0 5.926,0.658 8.278,1.881c0.282,0.188 0.564,0.47 0.564,0.941c-0.094,0.564 -0.471,0.94 -1.035,0.94z"></path></g></g>
                    </svg>
                </a>
                <a href="" class="text-white me-4">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0,0,256,256">
                        <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(10.66667,10.66667)"><path d="M5,3c-1.103,0 -2,0.897 -2,2v14c0,1.103 0.897,2 2,2h6.62109h2.79297h4.58594c1.103,0 2,-0.897 2,-2v-14c0,-1.103 -0.897,-2 -2,-2zM5,5h14l0.00195,14h-4.58789v-3.96484h2.36524l0.35156,-2.72461h-2.70117v-1.73633c0,-0.788 0.21961,-1.32031 1.34961,-1.32031h1.42773v-2.43164c-0.695,-0.071 -1.3928,-0.10552 -2.0918,-0.10352c-2.074,0 -3.49414,1.26584 -3.49414,3.58984v2.00586h-2.34375v2.72461h2.34375v3.96094h-6.62109z"></path></g></g>
                    </svg>
                </a>
              </section>
              <!-- Section: Social -->
            </div>
            <!-- Grid container -->
        
            <!-- Copyright -->
            <div
                 class="text-center p-3"
                 style="background-color: rgba(0, 0, 0, 0.2)"
                 >
                 @auth
                 <form action="/logout" method="POST">
                 @csrf
                 <button type="submit" class="btn rounded-0 text-white fw-bold" style="background-color:#483d8b">Logout</button>
                 </form>
                 @else
                 <p class="mini">Made with 💗 by Downfall Music</p>
                 @endauth
            </div>
            <!-- Copyright -->
          </footer>
          <!-- Footer -->

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <link rel="stylesheet" href="{{url('/')}}/assets/js/scripts.js"></script>
        <script>
            $(document).ready(function() {
                $('#summernote').summernote();
            });

            var quote = $('<blockquote class="quote">hello<footer>world</footer></blockquote>')[0];
$('.editor').summernote('insertNode', quote);
          </script>
    </body>
</html>