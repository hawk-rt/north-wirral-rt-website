@extends('_layouts.main')

@section('body')
    <!-- Header-->
    <header class="bg-light py-2 py-md-5">
        <div class="container px-3 px-md-5 my-4 my-md-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-xl-6 d-block text-center"><img class="img-fluid rounded-3 mb-5" src="/assets/images/photos/santa-sleigh-1-600x400.jpg" alt="Hoylake and West Kirby Santa Sleigh" /></div>
                <div class="col-xl-6">
                    <div class="text-center text-xl-start">
                        <h1 class="fw-bolder mb-2">Our famous Santa Sleigh, a magical experience for all</h1>
                        <p class="lead fw-normal text-muted mb-4">Every year we bring Santa to the streets of Greasby, Hoylake, Newton, Meols, and West Kirby to raise money for good causes and to bring a smile to the faces of the young children in our community.</p>
                        <p class="lead fw-normal text-muted mb-4">This is always a really special event for us. We love to see the community out on the streets and sharing this magical experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Santa sleigh routes section-->
    <section class="py-2 py-md-5 bg-white">
        <div class="container px-3 px-md-5 my-4 my-md-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <div class="text-center">
                        <h2 class="fw-bolder">Santa's routes</h2>
                        <p class="lead fw-normal text-muted mb-5">Santa is taking a break right now but below are the routes that Santa will be taking at Christmas in 2022.</p>
                        <p class="lead fw-normal text-muted mb-5">Please note these routes are subject to change so keep an eye on our Facebook page for any updates!</p>
                    </div>
                </div>
            </div>
            <div class="row gx-5">
                @foreach($santaRoutes as $route)
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="/assets/images/santa-routes/{{ $route->image }}" alt="{{ $route->title }} Santa Sleigh Route" />
                            <div class="card-body p-4">
                                @if ($route->pill)
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2">{{ $route->pill }}</div>
                                @endif
                                <a class="text-decoration-none link-dark stretched-link" href="#" data-bs-toggle="modal" data-bs-target="#santaRouteModal" data-bs-image="{{ $route->image }}" data-bs-title="{{ $route->title }}"><h5 class="card-title mb-3">{{ $route->title }}</h5></a>
                                <p class="card-text mb-0">{{ $route->text }}</p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="small">
                                            <div class="fw-bold">Date: <span class="text-muted">{{ $route->date }}</span></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <div class="modal fade" id="santaRouteModal" tabindex="-1" aria-labelledby="santaRouteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="santaRouteModalLabel">Santa Route</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection