<!-- Navigation-->
<nav class="navbar navbar-expand-xl navbar-light bg-primary">
    <div class="container px-3 px-md-5">
        <a class="navbar-brand d-none d-lg-block" href="/">
            <img src="/assets/images/nwrt_logo_dark_on_trans_200px.png" alt="" width="24" height="24" class="d-inline-block align-text-top">
            {{ $page->title }}
        </a>
        <a class="navbar-brand fs-6 d-lg-none text-center mx-0 w-100" href="/">
            <img src="/assets/images/nwrt_logo_dark_on_trans_200px.png" alt="" width="36" height="36" class="d-inline-block mb-1"><br/>
            {{ $page->title }}
        </a>
        <button class="navbar-toggler ms-auto me-auto ms-lg-0 me-lg-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link {{ $page->active('') }}" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link {{ $page->active($page->links->about) }}" href="{{ $page->links->about }}">About</a></li>
                <li class="nav-item"><a class="nav-link {{ $page->active($page->links->join) }}" href="{{ $page->links->join }}">Join Us</a></li>
                <li class="nav-item"><a class="nav-link {{ $page->active($page->links->events) }}" href="{{ $page->links->events }}">Events</a></li>
                <li class="nav-item"><a class="nav-link {{ $page->active($page->links->funding) }}" href="{{ $page->links->funding }}">Apply for Funding</a></li>
                <li class="nav-item"><a class="nav-link {{ $page->active($page->links->santa) }}" href="{{ $page->links->santa }}">Santa Sleigh</a></li>
                <li class="nav-item"><a class="nav-link {{ $page->active($page->links->donate) }}" href="{{ $page->links->donate }}">Donate</a></li>
                <li class="nav-item"><a class="nav-link {{ $page->active($page->links->contact) }}" href="{{ $page->links->contact }}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>