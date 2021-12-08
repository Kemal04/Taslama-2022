<!DOCTYPE html>
<html lang="">

<head>
    <title>ThreeMain Show</title>

    @include('app.meta')
</head>

<body style="background: #f6f2ef; font-size: 14px;">

    @include('app.navbar')


    <section class="about-banner"></section>

    <div class="container py-5 my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <ul class="nav border-bottom" id="myTab" role="tablist">
                    <li class="h5 mr-5 text-green">Yurtlar</li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" id="tab1" data-toggle="tab" href="#world-tab-1" role="tab" aria-controls="world-tab-1" aria-selected="true">All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" id="tab2" data-toggle="tab" href="#world-tab-2" role="tab" aria-controls="world-tab-2" aria-selected="false">Style hunter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" id="tab3" data-toggle="tab" href="#world-tab-3" role="tab" aria-controls="world-tab-3" aria-selected="false">Vogue</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" id="tab4" data-toggle="tab" href="#world-tab-4" role="tab" aria-controls="world-tab-4" aria-selected="false">Health &amp; Fitness</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" id="tab5" data-toggle="tab" href="#world-tab-5" role="tab" aria-controls="world-tab-5" aria-selected="false">Travel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" id="tab6" data-toggle="tab" href="#world-tab-6" role="tab" aria-controls="world-tab-6" aria-selected="false">Gadgets</a>
                    </li>
                </ul>
                <div class="tab-content my-3" id="myTabContent">
                    <div class="tab-pane fade active show" id="world-tab-1" role="tabpanel" aria-labelledby="tab1">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="splide world-tab-1">
                                    <div class="splide__track">
                                        <ul class="splide__list">
                                            <li class="splide__slide mr-3">
                                                <div class="card">
                                                    <img src="{{ asset('img/small-img/4.jpg') }}" class="img-fluid">
                                                    <div class="card-body">
                                                        <div class="" style="font-size: 18px; font-weight: 700; line-height: 1.3;"> Turbulent Mind Depict One of the Most Complex Concepts in Physics?</div>
                                                        <p class="text-secondary mt-3 w-75">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in... </p>
                                                        <a href="#" class="text-decoration-none text-secondary">Sep 29, 2017 at 9:48 am</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="splide__slide mr-3">
                                                <div class="card">
                                                    <img src="{{ asset('img/small-img/2.jpg') }}" class="img-fluid">
                                                    <div class="card-body">
                                                        <div class="" style="font-size: 18px; font-weight: 700; line-height: 1.3;"> Turbulent Mind Depict One of the Most Complex Concepts in Physics?</div>
                                                        <p class="text-secondary mt-3 w-75">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in... </p>
                                                        <a href="#" class="text-decoration-none text-secondary">Sep 29, 2017 at 9:48 am</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="splide__slide mr-3">
                                                <div class="card">
                                                    <img src="{{ asset('img/small-img/3.jpg') }}" class="img-fluid">
                                                    <div class="card-body">
                                                        <div class="" style="font-size: 18px; font-weight: 700; line-height: 1.3;"> Turbulent Mind Depict One of the Most Complex Concepts in Physics?</div>
                                                        <p class="text-secondary mt-3 w-75">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in... </p>
                                                        <a href="#" class="text-decoration-none text-secondary">Sep 29, 2017 at 9:48 am</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card mb-3 shadow-sm">
                                    <div class="row no-gutters">
                                        <div class="col-md-3 d-flex justify-content-center">
                                            <img src="{{ asset('img/small-img/1.webp') }}" class="card-img">
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body p-0 px-2 py-1">
                                                <div class="font-weight-bold">How Did van Gogh’s Turbulent Mind Depict One of the Most</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;">Katy Lin on Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3 shadow-sm">
                                    <div class="row no-gutters">
                                        <div class="col-md-3 d-flex justify-content-center">
                                            <img src="{{ asset('img/small-img/2.jpg') }}" class="card-img">
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body p-0 px-2 py-1">
                                                <div class="font-weight-bold">How Did van Gogh’s Turbulent Mind Depict One of the Most</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;">Katy Lin on Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3 shadow-sm">
                                    <div class="row no-gutters">
                                        <div class="col-md-3 d-flex justify-content-center">
                                            <img src="{{ asset('img/small-img/3.jpg') }}" class="card-img">
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body p-0 px-2 py-1">
                                                <div class="font-weight-bold">How Did van Gogh’s Turbulent Mind Depict One of the Most</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;">Katy Lin on Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3 shadow-sm">
                                    <div class="row no-gutters">
                                        <div class="col-md-3 d-flex justify-content-center">
                                            <img src="{{ asset('img/small-img/5.jpg') }}" class="card-img">
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body p-0 px-2 py-1">
                                                <div class="font-weight-bold">How Did van Gogh’s Turbulent Mind Depict One of the Most</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;">Katy Lin on Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="world-tab-2" role="tabpanel" aria-labelledby="tab2">
                        2131
                    </div>
                </div>
            </div>
            <div class="col-lg-4 border-left">
                <div class="border-bottom pl-4 py-3">
                    <div class="h5">Header</div>
                </div>
                <div class="border-bottom pl-4 py-3">
                    <p class="text-secondary">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum dolor tenetur perferendis modi dignissimos adipisci sunt nulla, enim eaque tempore consectetur? Voluptatibus saepe repellat nam, quidem dolorum tempora eveniet odit.
                    </p>
                </div>
                <div class="border-bottom pl-4 py-3">
                    <div class="h5">Top Blok</div>
                </div>
                <div class="border-bottom pl-4 py-3">
                    <div class="card mb-2 shadow-sm">
                        <div class="row no-gutters ">
                            <div class="col-md-3 d-flex justify-content-center">
                                <img src="{{ asset('img/small-img/1.webp') }}" class="card-img">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body p-0 px-2 py-1">
                                    <div class="font-weight-bold">How Did van Gogh’s Turbulent Mind Depict One of the Most</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2 shadow-sm">
                        <div class="row no-gutters ">
                            <div class="col-md-3 d-flex justify-content-center">
                                <img src="{{ asset('img/small-img/1.webp') }}" class="card-img">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body p-0 px-2 py-1">
                                    <div class="font-weight-bold">How Did van Gogh’s Turbulent Mind Depict One of the Most</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2 shadow-sm">
                        <div class="row no-gutters ">
                            <div class="col-md-3 d-flex justify-content-center">
                                <img src="{{ asset('img/small-img/1.webp') }}" class="card-img">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body p-0 px-2 py-1">
                                    <div class="font-weight-bold">How Did van Gogh’s Turbulent Mind Depict One of the Most</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2 shadow-sm">
                        <div class="row no-gutters ">
                            <div class="col-md-3 d-flex justify-content-center">
                                <img src="{{ asset('img/small-img/1.webp') }}" class="card-img">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body p-0 px-2 py-1">
                                    <div class="font-weight-bold">How Did van Gogh’s Turbulent Mind Depict One of the Most</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-bottom pl-4 py-3">
                    <div class="h5">Top Blok</div>
                </div>
                <div class="border-bottom pl-4 py-3">
                    Soial meida
                </div>
                <div class="border-bottom pl-4 py-3">
                    <div class="h5">Top Blok</div>
                </div>
                <div class="pl-4 py-3">
                    <div class="card border-0" style="background-color: transparent;">
                        <img src="{{ asset('img/small-img/4.jpg') }}" class="img-fluid rounded">
                        <div class="card-body">
                            <div class="" style="font-size: 18px; font-weight: 700; line-height: 1.3;"> Turbulent Mind Depict One of the Most Complex Concepts in Physics?</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('app.footer')

    @include('app.script')
</body>

</html>