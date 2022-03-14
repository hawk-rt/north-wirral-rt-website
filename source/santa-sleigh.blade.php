@extends('_layouts.main')

@section('body')
    <!-- Header-->
    <header class="py-5">
        <div class="container px-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center my-5">
                        <h1 class="fw-bolder mb-3">Our famous Santa Sleigh, a magical experience for young kids</h1>
                        <p class="lead fw-normal text-muted mb-4">Every year we bring Santa to the streets of West Kirby, Hoylake, Meols, and Saughall Massey to raise money for good causes and to bring a smile to the faces of the young children in our community.</p>
                        <p class="lead fw-normal text-muted mb-4">This is always a really special event for us. We love to see the community out on the streets and sharing this magical experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Santa sleigh routes section-->
    <section class="py-5 bg-light">
        <div class="container px-5 my-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <div class="text-center">
                        <h2 class="fw-bolder">Santa's routes</h2>
                        <p class="lead fw-normal text-muted mb-5">Santa is taking a break right now but below are the routes that Santa will be taking at Christmas 2022.</p>
                        <p class="lead fw-normal text-muted mb-5">Please note these are subject to change so keep an eye on our Facebook page for any updates!</p>
                    </div>
                </div>
            </div>
            <div class="row gx-5">
                @foreach($routes as $route)
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="https://dummyimage.com/600x350/ced4da/6c757d" alt="..." />
                            <div class="card-body p-4">
                                @if ($route->pill)
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2">{{ $route->pill }}</div>
                                @endif
                                <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">{{ $route->title }}</h5></a>
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
@endsection