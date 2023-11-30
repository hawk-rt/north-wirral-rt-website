@extends('_layouts.main')

@section('title', $page->name)
@section('description', $page->text)

@section('body')
    <header class="bg-light py-2 py-md-5">
        <div class="container px-3 px-md-5 my-4 my-md-2">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-xl-6 d-block text-center"><img class="img-fluid rounded-3 mb-5" src="/assets/images/photos/santa-sleigh-1-600x400.jpg" alt="North Wirral Santa Sleigh" /></div>
                <div class="col-xl-6">
                    <div class="text-center text-xl-start">
                        <h1 class="fw-bolder mb-2">Santa is coming to {{ $page->name }}!</h1>
                        <p class="lead fw-normal text-muted mb-4">{{ $page->date }} - {{ $page->time }}</p>
                        <p class="lead fw-normal text-muted mb-4">{{ $page->text }}</p>
                        <p class="lead fw-normal text-muted mb-4">We love to the community out on the streets and sharing this magical experience. And remember you're never too old for a selfie with Santa!</p>
                        <p class="lead fw-normal text-muted mb-4"><a class="link-danger" href="{{ $page->links->santa }}">Click here for all our 2023 sleigh routes</a></p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="py-2 py-md-5 bg-white">
        <div class="container px-3 px-md-5 my-4 my-md-2">
            <div class="row justify-content-center">
                <div class="text-center">
                    <p class="lead fw-normal text-muted mb-2">Route map for {{ $page->name }} - {{ $page->date }} - {{ $page->time }}</p>
                    <p class="lead fw-normal text-muted mb-4">Start point: <a href="{{ $page->start }}" class="link-success" target="_blank">{{ $page->start }}</a></p>
                    <img class="img-fluid" src="/assets/images/santa-routes/full/{{ $page->image }}" alt="{{ $page->name }} Santa Sleigh Route" />
                </div>
            </div>
        </div>
    </section>
@endsection