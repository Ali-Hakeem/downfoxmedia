<nav class="container">
    <label class="links-left">
            <a href="/"><img class="nav-logo" src="{{url('/')}}/assets/icons/logo.png"></a>
    </label>
    <input type="checkbox" id="sidebar-active">
        <label for="sidebar-active" class="open-sidebar-button">
           <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
        </label>
            
    <div class="ms-auto links-container">
        <label for="sidebar-active" class="close-sidebar-button">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
        </label>
        <a class="fw-bold text-uppercase font-weight-bold" href="/features">Features</a>
        <a class="fw-bold text-uppercase font-weight-bold" href="/article">Articles</a>
        <form class="p-4" action="/search" method="GET">
            <div class="form-group ms-auto">
                <div class="input-group">
                    <input type="text" name="search" placeholder="Search .." value="{{ old('search') }}" class="form-control rounded-0"/>
                        <!--<button type="submit" class="btn rounded-0" style="background-color:#483d8b">
                                        <i class="fas fa-search"></i>
                            </button>-->
                </div>
            </div>
        </form>
    </div>
</nav>

<div class="container py-3 col-xxl-6">
    <div class="col-lg-8">
        <h5 class="fw-bold text-white  text-capitalize fst-italic">@yield('page_header')</h5>
    </div>