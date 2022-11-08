@extends('_layouts.main')

@section('title', 'Contact')
@section('description', 'Get in touch with North Wirral Round Table. We look forward to hearing from you.')

@section('body')
    <!-- Header-->
    <header class="py-2 py-md-5 bg-light">
        <div class="container px-3 px-md-5 my-4 my-md-2">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                        <h1 class="fw-bolder">Get in touch</h1>
                        <p class="lead fw-normal text-muted my-4">Email us <a href="mailto:hawk@roundtable.org.uk">hawk@roundtable.org.uk</a> or use the form below to get in touch.</p>
                        <p class="lead fw-normal text-muted mb-4">Looking for funding? Use our <a href="{{ $page->links->funding }}">funding application form</a>.</p>
                        <p class="lead fw-normal text-muted mb-0">We look forward to hearing from you.</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Page content-->
    <section class="py-2 py-md-5">
        <div class="container px-3 px-md-5 my-4 my-md-5">
            <!-- Contact form-->
            <div class="row gx-5 justify-content-center">
                <div class="col-12 col-xl-8">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://docs.google.com/forms/d/e/1FAIpQLScPpD4sG4gCwkjzwKtdUv4-5_vUgSl5rnS1qfwACGzMvC2sJA/viewform?embedded=true" width="100%" height="1000" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection