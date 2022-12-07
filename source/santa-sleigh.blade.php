@extends('_layouts.main')

@section('title', 'Santa Sleigh')
@section('description', 'Every year we bring our famous Santa Sleigh to the streets of Greasby, Hoylake, Newton, Meols, West Kirby, and beyond to raise money for good causes and to bring the magic of Christmas to everyone in our community.')

@section('body')
    <!-- Header-->
    <header class="bg-light py-2 py-md-5">
        <div class="container px-3 px-md-5 my-4 my-md-2">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-xl-6 d-block text-center"><img class="img-fluid rounded-3 mb-5" src="/assets/images/photos/santa-sleigh-1-600x400.jpg" alt="North Wirral Santa Sleigh" /></div>
                <div class="col-xl-6">
                    <div class="text-center text-xl-start">
                        <h1 class="fw-bolder mb-2">Our famous Santa Sleigh, a magical experience for all</h1>
                        <p class="lead fw-normal text-muted mb-4">Every year we bring Santa to the streets of Greasby, Hoylake, Newton, Meols, Wallasey, West Kirby and beyond to raise money for good causes and to bring a smile to the faces of the young children in our community.</p>
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
                <div class="col-lg-8">
                    <div class="text-center">
                        <h2 class="fw-bolder">Come out and meet Santa!</h2>
                        <p class="lead fw-normal text-muted mb-2">Bigger and better than ever! We've teamed up with local groups to bring you more routes than ever and all supporting local good causes. </p>
                        <p class="lead fw-normal text-muted mb-5">All of Santa's routes for Christmas 2022 are below. Keep an eye on our <a href="https://www.facebook.com/northwirralroundtable">Facebook page</a> for updates!</p>
                    </div>
                </div>
            </div>
            <div class="row gx-5">
                @foreach($santaRoutes as $route)
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <a class="text-decoration-none link-dark" href="#" data-bs-toggle="modal" data-bs-target="#santaRouteModal" data-bs-image="{{ $route->image }}" data-bs-title="{{ $route->title }}">
                                <img class="card-img-top" src="/assets/images/santa-routes/{{ \Illuminate\Support\Str::replace('.jpg', '_thumb.jpg', $route->image) }}" alt="{{ $route->title }} Santa Sleigh Route" />
                            </a>
                            <div class="card-body p-4">
                                @if ($route->pill)
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2">{{ $route->pill }}</div>
                                @endif
                                @if ($route->support)
                                <div class="badge bg-secondary bg-gradient rounded-pill mb-2">{{ $route->support }}</div>
                                @endif
                                <h5 class="card-title mb-3">{{ $route->title }}</h5>
                                <p class="card-text mb-0">{{ $route->text }}</p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="small">
                                            <div class="fw-bold">When: <span class="text-muted">{{ $route->date }}</span></div>
                                            <div class="fw-bold">RSVP on Facebook: <span class="text-muted"><a href="{{ $route->fb }}" target="_blank">{{ $route->fb }}</a></span></div>
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