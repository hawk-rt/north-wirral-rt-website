@extends('_layouts.main')

@section('body')
    <!-- Page content-->
    <section class="py-5">
        <div class="container px-5">
            <!-- Contact form-->
            <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-10">
                        <div class="text-center">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-cash-stack"></i></div>
                            <h1 class="fw-bolder">Apply for funding</h1>
                            <p class="lead fw-normal text-muted mb-4">We always welcome funding applications from local good causes. If you feel that Hoylake and West Kirby Round Table could support you or a cause with which you are affiliated then please use this form. Please check that there isn’t a more local Round Table to you before applying, thank you.</p>
                        </div>
                    </div>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-12 col-xl-8">
                        <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://docs.google.com/forms/d/e/1FAIpQLSfxFd3Jb0-242FI52JEnWJbK65TKwNftiC5OEMzfdwZkiZNPA/viewform?embedded=true" width="100%" height="1700" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection