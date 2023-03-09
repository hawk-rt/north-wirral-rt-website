@extends('_layouts.main')

@section('title', 'Events')
@section('description', 'North Wirral Round Table is your local branch of this national organisation which fundraises for local good causes. Our mission is to have fun and challenge ourselves while supporting the wider Wirral community.')

@section('body')
    <!-- Header-->
    <header class="py-2 py-md-5">
        <div class="container px-3 px-md-5 my-4 my-md-2">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <h1 class="fw-bolder mb-3">Upcoming events</h1>
                        <p class="lead fw-normal text-muted mb-4">We organise social and community events throughout the year and also attend events from other local Round Tables. There is always something happening!</p>
                        <p class="lead fw-normal text-muted mb-4">Bookmark this page or subscribe to the calendar below.</p>
                        <p class="lead fw-normal text-muted mb-0">Newcomers are always welcome to all our events, <a class="link-dark" href="{{ $page->links->contact }}">contact us</a> to find out more!</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- About section one-->
    <section class="py-2 py-md-5 bg-light" id="read-on">
        <div class="container px-3 px-md-5 my-4 my-md-5">
            <div class="row gx-5 align-items-center">
                <div class="col-12">
                    <!-- start feedwind code -->
                    <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" preloader-text="Loading" data-fw-param="160209/"></script>
                    <!-- end feedwind code -->
                    <div class="text-center mt-2 mb-0">
                        <a class="btn btn-primary btn-lg mt-2" href="https://calendar.google.com/calendar/embed?src=f486b562a6046a1f3d30550a1aaf9168e58931045d658174532a6f64199a8ede@group.calendar.google.com" target="_blank">View the full calendar</a>
                        <a class="btn btn-primary btn-lg mt-2" href="https://calendar.google.com/calendar/u/0?cid=ZjQ4NmI1NjJhNjA0NmExZjNkMzA1NTBhMWFhZjkxNjhlNTg5MzEwNDVkNjU4MTc0NTMyYTZmNjQxOTlhOGVkZUBncm91cC5jYWxlbmRhci5nb29nbGUuY29t" target="_blank">Subscribe to the calendar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team members section-->
    <section class="py-2 py-md-5">
        <div class="container px-3 px-md-5 my-4 my-md-5">
            <!-- Call to action-->
            <aside class="bg-primary bg-gradient rounded-3 p-4 p-sm-5">
                <div class="mb-4 mb-xl-0 text-center">
                    <p class="text-dark m-0 fs-3 fw-bold">We are seeking new members, why not <a class="link-dark" href="{{ $page->links->join }}">join us</a>?</p>
                </div>
            </aside>
        </div>
    </section>
@endsection