@extends('_layouts.main')

@section('body')
    <!-- Header-->
    <header class="bg-light py-2 py-md-5">
        <div class="container px-3 px-md-5 my-4 my-md-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-xl-6">
                    <div class="text-center text-xl-start">
                        <h1 class="fw-bolder mb-2">Do you want to have fun, build lifelong friendships and meet like-minded men from your community?</h1>
                        <p class="lead fw-normal text-muted mb-4">If the answer to these questions is YES, then Round Table is the perfect place for you.</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                            <a class="btn btn-primary btn-lg" href="#features">Read on</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 d-block text-center my-5 my-xl-0">
                    <div id="carouselHeader" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" data-bs-ride="carousel" data-bs-pause="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/assets/images/photos/shuffleboard-600x400.jpg" class="d-block w-100 rounded-3" alt="Shuffleboard">
                            </div>
                            <div class="carousel-item">
                                <img src="/assets/images/photos/axe-throwing-600x400.jpg" class="d-block w-100 rounded-3" alt="Shuffleboard">
                            </div>
                            <div class="carousel-item">
                                <img src="/assets/images/photos/tractor-push-600x400.jpg" class="d-block w-100 rounded-3" alt="Tractor Push">
                            </div>
                            <div class="carousel-item">
                                <img src="/assets/images/photos/shooting-600x400.jpg" class="d-block w-100 rounded-3" alt="Clay Pigeon Shooting">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Features section-->
    <section class="py-2 py-md-5" id="features">
        <div class="container px-3 px-md-5 my-4 my-md-5">
            <div class="row gx-5">
                <div class="col-12 mb-5 "><h2 class="fw-bolder mb-0">A world of opportunities awaits...</h2></div>
                <div class="col-12">
                    <div class="row gx-5 row-cols-1 row-cols-md-2">
                        <div class="col mb-5 h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-emoji-laughing"></i></div>
                            <h2 class="h5">Have fun, experience great things</h2>
                            <p class="mb-0">We have an action packed calendar of activities and events throughout the year. From go-karting to hill walking, to comedy nights, bowling, shooting, axe-throwing, game nights, skiing, hovercraft racing and loads more. There is something for everyone.</p>
                        </div>
                        <div class="col mb-5 h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-house-heart"></i></div>
                            <h2 class="h5">Make a difference in your community</h2>
                            <p class="mb-0">As well as having fun, community is at the heart of what we do. Among other things we collect donations with our famous Santa Sleigh and donate to many local good causes.</p>
                        </div>
                        <div class="col mb-5 mb-md-0 h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-people"></i></div>
                            <h2 class="h5">Meet like-minded people</h2>
                            <p class="mb-0">The Round Table is a great way to meet like-minded people of a similar age and make amazing new friendships. We're a supportive and friendly group where everyone looks out for each other.</p>
                        </div>
                        <div class="col h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-incognito"></i></div>
                            <h2 class="h5">No secrets or funny handshakes</h2>
                            <p class="mb-0">There are no secrets, funny handshakes or trouser leg rolling - we are not that kind of club! We are an open and transparent organisation where everyone is welcome.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial section-->
    <div class="py-2 py-md-5 bg-light">
        <div class="container px-3 px-md-5 my-4 my-md-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-10 col-xl-7">
                    <div class="text-center">
                        <div class="fs-4 mb-4 fst-italic">"Round Table helped me meet others in my town that wanted to do something in the community whilst having great fun doing it! I can truly say that Round Table has transformed my life!"</div>
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
    <section class="bg-white py-2 py-md-5">
        <div class="container px-3 px-md-5 my-4 my-md-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-xl-5 col-xxl-6 d-block text-center"><img class="img-fluid rounded-3 mb-5" src="/assets/images/photos/walk-2020-1-600x400.jpg" alt="HaWK Round Table Walk Summer 2020" /></div>
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="text-center text-xl-start">
                        <h4 class="fw-bolder mb-2">Becoming a member of HaWK Round Table couldn't be easier</h4>
                        <p class="lead fw-normal text-muted mb-4">You don't have to join straight away. Come to a few events, meet the people, relax and have a chat about what is going on this year and then make your decision.</p>
                        <p class="lead fw-normal text-muted mb-4">There is no pressure to join and if you do join there is no pressure to attend events and meetings. We all have other commitments that often mean we cannot attend get togethers. That is absolutely fine. Round Table is a way to unwind and forget other pressures, not to give anyone more stress.</p>
                        <p class="lead fw-normal mb-4">So, give us a call or send us a message. We look forward to seeing you soon.</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                            <a class="btn btn-primary btn-lg px-4 me-sm-3" href="{{ $page->links->contact }}">Get in touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection