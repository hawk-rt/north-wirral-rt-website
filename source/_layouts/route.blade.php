@extends('_layouts.main')

@section('body')
    <header class="py-2 py-md-5">
        <div class="container px-3 px-md-5 my-4 my-md-2">
            <div class="row justify-content-center">
                    <div class="text-center">
                        <h1 class="fw-bolder mb-3">{{ $page->name }}</h1>
                        <p class="lead fw-normal text-muted mb-4">{{ $page->date }} - {{ $page->time }}</p>
                        <p class="lead fw-normal text-muted mb-4">{{ $page->text }}</p>
                        <img class="img-fluid" src="/assets/images/santa-routes/full/{{ $page->image }}" alt="{{ $page->name }} Santa Sleigh Route" />
                    </div>
                </div>
        </div>
    </header>
@endsection