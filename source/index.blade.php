@extends('_layouts.main')

@section('body')
    @include('_partials.masthead')
    <div class="py-5">
        <div class="container px-5">
            <!-- Call to action-->
            <aside class="bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-5">
                <div class="mb-4 mb-xl-0 text-center">
                    <p class="text-white m-0 fs-3 fw-bold">Are you local? We are actively seeking new members.<br /> Why not <a class="link-light" href="/join-us">join us</a> or find out <a class="link-light" href="/about">more about us</a>?</p>
                </div>
            </aside>
        </div>
    </div>
    <!-- Features section-->
    <section class="py-5" id="features">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="col-lg-4 mb-5 mb-lg-0"><h2 class="fw-bolder mb-0">A world of opportunities awaits.</h2></div>
                <div class="col-lg-8">
                    <div class="row gx-5 row-cols-1 row-cols-md-2">
                        <div class="col mb-5 h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-emoji-laughing"></i></div>
                            <h2 class="h5">Have fun, experience great things</h2>
                            <p class="mb-0">We have an action packed calendar of activities throughout the year. From go-karting to hill walking, to comedy nights, bowling, shooting and more. There is something for everyone.</p>
                        </div>
                        <div class="col mb-5 h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-house-heart"></i></div>
                            <h2 class="h5">Make a difference in your community</h2>
                            <p class="mb-0">As well as having fun, community is at the heart of what we do. Among other things we collect donations with our famous Santa Sleigh and donate to many local good causes.</p>
                        </div>
                        <div class="col mb-5 mb-md-0 h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-people"></i></div>
                            <h2 class="h5">Meet like-minded people</h2>
                            <p class="mb-0">The Round Table is a great way to meet like-minded people of a similar age and make amazing new friendships. It's a supportive and friendly group where everyone looks out for each other.</p>
                        </div>
                        <div class="col h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-incognito"></i></div>
                            <h2 class="h5">No secrets or funny handshakes</h2>
                            <p class="mb-0">There are no secrets, funny handshakes or trouser leg rolling - we are not that kind of club! We are an open and transparent organisation. Everyone is welcome!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial section-->
    <div class="py-5 bg-light">
        <div class="container px-5 my-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-10 col-xl-7">
                    <div class="text-center">
                        <div class="fs-4 mb-4 fst-italic">"Round Table helped me meet others in my town that wanted to do something in the community whilst having great fun doing it!  I can truly say that Round Table has transformed my life!"</div>
                        <div class="d-flex align-items-center justify-content-center">
                            <img class="rounded-circle me-3" src="/assets/images/faces/derek.png" alt="Derek Collie" width="40" />
                            <div class="fw-bold">
                                Derek Collie
                                <span class="fw-bold text-primary mx-1">/</span>
                                Hoylake and West Kirby 311
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog preview section-->
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <div class="text-center">
                        <h2 class="fw-bolder">From our blog</h2>
                        <p class="lead fw-normal text-muted mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque fugit ratione dicta mollitia. Officiis ad.</p>
                    </div>
                </div>
            </div>
            <div class="row gx-5">
                <div class="col-lg-4 mb-5">
                    <div class="card h-100 shadow border-0">
                        <img class="card-img-top" src="https://dummyimage.com/600x350/ced4da/6c757d" alt="..." />
                        <div class="card-body p-4">
                            <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                            <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Blog post title</h5></a>
                            <p class="card-text mb-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                            <div class="d-flex align-items-end justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                    <div class="small">
                                        <div class="fw-bold">Kelly Rowan</div>
                                        <div class="text-muted">March 12, 2021 &middot; 6 min read</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card h-100 shadow border-0">
                        <img class="card-img-top" src="https://dummyimage.com/600x350/adb5bd/495057" alt="..." />
                        <div class="card-body p-4">
                            <div class="badge bg-primary bg-gradient rounded-pill mb-2">Media</div>
                            <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Another blog post title</h5></a>
                            <p class="card-text mb-0">This text is a bit longer to illustrate the adaptive height of each card. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                            <div class="d-flex align-items-end justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                    <div class="small">
                                        <div class="fw-bold">Josiah Barclay</div>
                                        <div class="text-muted">March 23, 2021 &middot; 4 min read</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card h-100 shadow border-0">
                        <img class="card-img-top" src="https://dummyimage.com/600x350/6c757d/343a40" alt="..." />
                        <div class="card-body p-4">
                            <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                            <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">The last blog post title is a little bit longer than the others</h5></a>
                            <p class="card-text mb-0">Some more quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                            <div class="d-flex align-items-end justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                    <div class="small">
                                        <div class="fw-bold">Evelyn Martinez</div>
                                        <div class="text-muted">April 2, 2021 &middot; 10 min read</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Call to action-->
            <aside class="bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-5">
                <div class="mb-4 mb-xl-0 text-center">
                    <p class="text-white m-0 fs-3 fw-bold">Are you local? We are actively seeking new members.<br /> Why not <a class="link-light" href="/join-us">join us</a> or find out <a class="link-light" href="/about">more about us</a>?</p>
                </div>
            </aside>
        </div>
    </section>
@endsection