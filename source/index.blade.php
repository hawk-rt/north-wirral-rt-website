@extends('_layouts.main')

@section('body')
    <!-- Header-->
    <header class="bg-light py-5">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bolder mb-2">Hoylake and West Kirby Round Table</h1>
                        <p class="lead fw-normal mb-4">We are your local community group for men aged 18-45. We organise social events and activities, fundraise in the community and support local causes.</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                            <a class="btn btn-primary btn-lg px-4 me-sm-3" href="/join-us">Join Us</a>
                            <a class="btn btn-outline-dark btn-lg px-4" href="#start">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-6 d-block text-center"><img class="img-fluid rounded-3 my-5" src="/assets/images/do-more.jpg" alt="..." /></div>
            </div>
        </div>
    </header>
    <section class="py-5">
        <div class="container px-5">
            <!-- Call to action-->
            <aside class="bg-primary bg-gradient rounded-3 p-4 p-sm-5">
                <div class="mb-4 mb-xl-0 text-center">
                    <p class="text-dark m-0 fs-3 fw-bold">We are actively seeking new members.<br /> Why not <a class="link-dark" href="/join-us">join us</a> or find out <a class="link-dark" href="/about">more about us</a>?</p>
                </div>
            </aside>
        </div>
    </section>
    <!-- Section one-->
    <section class="py-5 bg-light" id="start">
        <div class="container px-5 my-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="/assets/images/photos/walk-2020-600x400.jpg" alt="..." /></div>
                <div class="col-lg-6">
                    <h2 class="fw-bolder">About us</h2>
                    <p class="lead fw-normal text-muted mb-4">Hoylake and West Kirby Round Table is your local branch of this national organisation, which fundraises for local good causes. We are a group of young men aged 18-45 in the Hoylake and West Kirby area of Wirral. As well as fundraising and helping the local community we meet regularly for social events and activities.</p>
                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="/about">More about us</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Section two-->
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="/assets/images/photos/axe-throwing-600x400.jpg" alt="..." /></div>
                <div class="col-lg-6">
                    <h2 class="fw-bolder">Join us</h2>
                    <p class="lead fw-normal text-muted mb-4">We are an open organisation that always welcomes new members from all walks of life. If you are a male aged 18-45 in the Hoylake and West Kirby area then why not find out more about what we're about? It could be the best decision you make today!</p>
                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="/join-us">Learn more</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Section three-->
    <section class="py-5 bg-light">
        <div class="container px-5 my-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="/assets/images/photos/together-600x400.jpg" alt="..." /></div>
                <div class="col-lg-6">
                    <h2 class="fw-bolder">Apply for funding</h2>
                    <p class="lead fw-normal text-muted mb-4">We are always looking for worthy local causes to contribute to. If you feel that Hoylake and West Kirby Round Table could support you or a cause with which you are affiliated then we'd love to hear from you.</p>
                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="/apply-for-funding">Apply for funding</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Section four-->
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="/assets/images/photos/santa-sleigh-1-600x400.jpg" alt="..." /></div>
                <div class="col-lg-6">
                    <h2 class="fw-bolder">Santa Sleigh</h2>
                    <p class="lead fw-normal text-muted mb-4">Every year we help Santa to visit families across the area.</p>
                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="/santa-sleigh">Santa sleigh details</a>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-light">
        <div class="container px-5 my-5">
            <!-- Call to action-->
            <aside class="bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-5">
                <div class="mb-4 mb-xl-0 text-center">
                    <p class="text-dark m-0 fs-3 fw-bold">We are actively seeking new members.<br /> Why not <a class="link-dark" href="/join-us">join us</a> or find out <a class="link-dark" href="/about">more about us</a>?</p>
                </div>
            </aside>
        </div>
    </section>
@endsection
