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
    @if($page->showSantaRoutes)
    <!-- Santa sleigh routes section-->
    <section class="py-2 py-md-5 bg-white">
        <div class="container px-3 px-md-5 my-4 my-md-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <h2 class="fw-bolder">Come out and meet Santa!</h2>
                        <p class="lead fw-normal text-muted mb-2">Bigger and better than ever! We've teamed up with local groups to bring you more routes than ever and all supporting local good causes. </p>
                        <p class="lead fw-normal text-muted mb-5">All of Santa's routes for Christmas 2023 are below. Keep an eye on our <a href="https://www.facebook.com/northwirralroundtable">Facebook page</a> for updates!</p>
                    </div>
                </div>
            </div>
            <div class="row gx-5">
                @foreach($santaRoutes as $route)
                    <div class="col-lg-4 mb-5">
                        <a class="text-decoration-none link-dark" href="{{ $route->getPath() }}">                        <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="/assets/images/santa-routes/thumbs/{{ $route->image }}" alt="{{ $route->name }} Santa Sleigh Route" />
                                <div class="card-body p-4">
                                    <h6 class="card-subtitle mb-2 text-muted">{{ $route->date }}</h6>
                                    <h5 class="card-title mb-3">{{ $route->name }}</h5>
                                    <p class="card-text mb-0">{{ $route->text }}</p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    @if ($route->time)
                                        <div class="badge bg-danger bg-gradient rounded-pill mb-2">{{ $route->time }}</div>
                                    @endif
                                    @if ($route->support)
                                        <div class="badge bg-success bg-gradient rounded-pill mb-2">{{ $route->support }}</div>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @else
        <section class="py-2 py-md-5 bg-white">
            <div class="container px-3 px-md-5 my-4 my-md-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center">
                            <h2 class="fw-bolder">Santa is having a break!</h2>
                            <p class="lead fw-normal text-muted mb-2">Santa, Rudolph and all the elves are enjoying a well-deserved break at the moment. However, it won't be long until they begin to plan the routes for Christmas 2023! Keep an eye on our <a href="https://www.facebook.com/northwirralroundtable">Facebook page</a> for updates.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection