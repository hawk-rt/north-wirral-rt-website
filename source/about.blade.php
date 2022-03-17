@extends('_layouts.main')

@section('body')
    <!-- Header-->
    <header class="py-2 py-md-5">
        <div class="container px-3 px-md-5 my-4 my-md-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <h1 class="fw-bolder mb-3">Our mission is to have fun and challenge ourselves while supporting the wider Wirral community.</h1>
                        <p class="lead fw-normal text-muted mb-4">Hoylake and West Kirby Round Table is your local branch of this national organisation which fundraises for local good causes. The members are a group of men aged 18 to 45 from differing backgrounds who have joined for a variety of reasons but mainly to have some fun and challenge themselves whilst at the same time supporting the wider Wirral community.</p>
                        <a class="btn btn-primary btn-lg" href="#read-on">Read about what we do</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- About section one-->
    <section class="py-2 py-md-5 bg-light" id="read-on">
        <div class="container px-3 px-md-5 my-4 my-md-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="/assets/images/photos/walk-2020-1-600x400.jpg" alt="Round Table members on a windy day" /></div>
                <div class="col-lg-6">
                    <h2 class="fw-bolder">Social Events</h2>
                    <p class="lead fw-normal text-muted mb-0">We have numerous social events and activities throughout the year, ranging from water sports to walking weekends, from pool nights to orienteering challenges and from black tie charity balls to go-karting. There really is something for everyone in Round Table!</p>
                </div>
            </div>
        </div>
    </section>
    <!-- About section two-->
    <section class="py-2 py-md-5">
        <div class="container px-3 px-md-5 my-4 my-md-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="/assets/images/photos/santa-sleigh-1-600x400.jpg" alt="Santa visiting families in Hoylake and West Kirby" /></div>
                <div class="col-lg-6">
                    <h2 class="fw-bolder">Fundraising Events</h2>
                    <p class="lead fw-normal text-muted mb-4">Our biggest fundraising event is our famous <a href="{{ $page->links->santa }}">Santa Sleigh</a> which you can see around the streets of West Kirby, Hoylake, Meols and beyond during December each year.</p>
                    <p class="lead fw-normal text-muted mb-0">The Santa Sleigh is really enjoyable event to be involved with and everyone is welcome to join us. <a href="{{ $page->links->contact }}">Get in touch</a> if you'd like to be involved.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- About section three -->
    <section class="py-2 py-md-5 bg-light" id="read-on">
        <div class="container px-3 px-md-5 my-4 my-md-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="/assets/images/photos/winter-warmer-600x400.jpg" alt="Winter Warmer" /></div>
                <div class="col-lg-6">
                    <h2 class="fw-bolder">Community Events</h2>
                    <p class="lead fw-normal text-muted mb-4">Each year we organise a fantastic "Winter Warmer" party for local elderly, vulnerable or isolated people. We arrange transport for those that need it and we serve up delicious hot food with a live band and the all-important glass of Sherry! A truly heartwarming event and great fun for all involved.</p>
                    <p class="lead fw-normal text-muted mb-0">Due to the pandemic our usual parties have been cancelled so instead we've been distributing Christmas hampers throughout the Wirral.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- About section two-->
    <section class="py-2 py-md-5">
        <div class="container px-3 px-md-5 my-4 my-md-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="/assets/images/photos/together-600x400.jpg" alt="Supporting good causes together" /></div>
                <div class="col-lg-6">
                    <h2 class="fw-bolder">Supporting Good Causes</h2>
                    <p class="lead fw-normal text-muted mb-0">Aside from fun and friendship, our purpose as a group is to support local good causes. We are always on the lookout for causes that would benefit from our help so if you feel that Hoylake and West Kirby Round Table could support your cause then please fill out our <a href="{{ $page->links->funding }}">funding application</a>.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Team members section-->
    <section class="py-2 py-md-5 bg-light">
        <div class="container px-3 px-md-5 my-4 my-md-5">
            <!-- Call to action-->
            <aside class="bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-5">
                <div class="mb-4 mb-xl-0 text-center">
                    <p class="text-dark m-0 fs-3 fw-bold">We are seeking new members, why not <a class="link-dark" href="{{ $page->links->join }}">join us</a>?</p>
                </div>
            </aside>
        </div>
    </section>
@endsection