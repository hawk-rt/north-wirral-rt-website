@extends('_layouts.main')

@section('title', 'Apply for funding')

@section('body')
    <!-- Header-->
    <header class="py-2 py-md-5 bg-light">
        <div class="container px-3 px-md-5 my-4 my-md-2">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-cash-stack"></i></div>
                        <h1 class="fw-bolder">Apply for funding</h1>
                        <p class="lead fw-normal text-muted my-4">We always welcome funding applications from local good causes.</p>
                        <p class="lead fw-normal text-muted mb-0">If you feel that Hoylake and West Kirby Round Table could support you or a cause with which you are affiliated then please use this form.</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Page content-->
    <section class="py-2 py-md-5">
        <div class="container px-3 px-md-5 my-4 my-md-5">
            <!-- Application form-->
            <div class="row gx-5 justify-content-center">
                <div class="col-12 col-xl-8">
                    <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" src="https://docs.google.com/forms/d/e/1FAIpQLSfxFd3Jb0-242FI52JEnWJbK65TKwNftiC5OEMzfdwZkiZNPA/viewform?embedded=true" width="100%" height="1700" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection