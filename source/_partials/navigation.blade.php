<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container px-5">
        <a class="navbar-brand d-none d-md-block" href="/">
            <img src="/favicon.png" alt="" width="24" height="24" class="d-inline-block align-text-top">
            {{ $page->title }}
        </a>
        <a class="navbar-brand fs-6 d-md-none text-center mx-0 w-100" href="/">
            <img src="/favicon.png" alt="" width="36" height="36" class="d-inline-block mb-1"><br/>
            {{ $page->title }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="/join-us">Join Us</a></li>
                <li class="nav-item"><a class="nav-link" href="/apply-for-funding">Apply for Funding</a></li>
                <li class="nav-item"><a class="nav-link" href="/santa-sleigh">Santa Sleigh</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>