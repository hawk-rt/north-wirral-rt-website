@extends('_layouts.main')

@section('title', 'Donate')
@section('description', "We raise money throughout the year to help local good causes across the Wirral. We're currently setting up an online donations platform to make it easier to donate directly to us.")

@section('body')
    <!-- Header-->
    <header class="py-2 py-md-5">
        <div class="container px-3 px-md-5 my-4 my-md-2">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-piggy-bank"></i></div>
                        <h1 class="fw-bolder">Donate</h1>
                        <p class="lead fw-normal text-muted my-4">We raise money throughout the year to help local good causes across the Wirral.</p>
                        <p class="lead fw-bold text-muted my-4">Click the button below to visit our current Santa Sleigh 2022 Fundraiser on Givey.</p>
                        <div class="p-5">
                            <iframe loading="lazy" width="400" height="120" src="https://www.givey.com/embeds/fundraisers/northwirralsantasleigh2022/widget?layout=horizontal" style="border: none"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="py-5 bg-light">
        <div class="container px-5 my-5">
            <h3 class="display-5 fw-bolder mb-4">How your money helps</h3>
            <p class="lead fw-normal text-muted my-4">Here are some of the local good causes across the Wirral we have supported in 2022...</p>
        </div>
    </section>
    <!-- Section one-->
    <section class="py-2 py-md-5" id="start">
        <div class="container px-3 px-md-5 my-4 my-md-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="/assets/images/photos/tam-oshanter-600x400.jpg" alt="Tam O'Shanter Urban Farm" /></div>
                <div class="col-lg-6">
                    <h2 class="fw-bolder">Tam O'Shanter Urban Farm</h2>
                    <p class="lead fw-normal text-muted mb-4">We know that the wonderful Tam O'Shanter Urban Farm is such an important community asset and so we were delighted to be able to support them this year with a cheque for £500 - and a little help clearing the paddocks!</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Section two-->
    <section class="py-2 py-md-5 bg-light">
        <div class="container px-3 px-md-5 my-4 my-md-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="/assets/images/photos/mencap-600x400.jpg" alt="Wirral Mencap" /></div>
                <div class="col-lg-6">
                    <h2 class="fw-bolder">Wirral Mencap</h2>
                    <p class="lead fw-normal text-muted mb-4">We recently purchased a new washing machine and vacuum cleaner for the wonderful people at Wirral Mencap. These will be used to support their independent learning skills courses, encouraging their members to learn everyday living tasks so they have the opportunity to learn in a safe environment and potentially go on to live independently. </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Section three-->
    <section class="py-2 py-md-5" id="start">
        <div class="container px-3 px-md-5 my-4 my-md-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="/assets/images/photos/paullavelle-600x400.jpg" alt="Paul Lavelle Foundation" /></div>
                <div class="col-lg-6">
                    <h2 class="fw-bolder">Paul Lavelle Foundation</h2>
                    <p class="lead fw-normal text-muted mb-4">This year we donated £500 to the Paul Lavelle Foundation and have also partnered with them to help run our Santa Sleigh. It is incredible and inspiring to see the work that PLF have done in such a short space of time to raise awareness of male domestic abuse and also to provide essential frontline services to help victims and survivors.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Section four-->
    <section class="py-2 py-md-5 bg-light">
        <div class="container px-3 px-md-5 my-4 my-md-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="/assets/images/photos/hampers-600x400.jpg" alt="Christmas Hampers" /></div>
                <div class="col-lg-6">
                    <h2 class="fw-bolder">Christmas Hampers</h2>
                    <p class="lead fw-normal text-muted mb-4">In 2021 we bought 100 Christmas hampers and distributed them to the elderly, isolated and vulnerable across Wirral. This year we are partnering with Involve Northwest, Age UK Wirral, and local churches to provide 200 hampers to the most needy this Christmas. The small gift of a hamper can really brighten someone's Christmas and we are incredibly proud and grateful to be able to make this happen.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Section five-->
    <section class="py-2 py-md-5" id="start">
        <div class="container px-3 px-md-5 my-4 my-md-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="/assets/images/photos/hive-600x400.jpg" alt="Hive Wirral" /></div>
                <div class="col-lg-6">
                    <h2 class="fw-bolder">And many more...</h2>
                    <p class="lead fw-normal text-muted mb-4">This year we have also been able to support many other local causes including The Hive Wirral, Wirral Hospice St Johns, Black Horse Hill Infant and Junior School, Newton Girl Guides, Incredible Edible Hoylake and many more local good causes. We are extremely proud to be able to help so many causes that are at the heart of our community and we hope to support many more in 2023!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-light">
        <div class="container px-5 my-5 text-center">
            <p class="lead fw-normal text-muted my-4">Please donate now to help us continue to support our local community!</p>
            <iframe loading="lazy" width="400" height="120" src="https://www.givey.com/embeds/fundraisers/northwirralsantasleigh2022/widget?layout=horizontal" style="border: none"></iframe>
        </div>
    </section>
@endsection