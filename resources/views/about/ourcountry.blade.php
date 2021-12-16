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
                    <li class="h5 mr-5 text-green">Welayatlar</li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" id="tab1" data-toggle="tab" href="#world-tab-1" role="tab" aria-controls="world-tab-1" aria-selected="true">Hemmesi</a>
                    </li>
                    @foreach($welayats as $welayat)
                    <li class="nav-item">
                        <a class="nav-link text-dark" id="{{ $welayat->id }}" data-toggle="tab" href="#a{{ $welayat->id }}" role="tab" aria-controls="{{ $welayat->id }}" aria-selected="false">{{ $welayat->name }}</a>
                    </li>
                    @endforeach
                </ul>
                <div class="tab-content my-3" id="myTabContent">
                    <div class="tab-pane fade active show" id="world-tab-1" role="tabpanel" aria-labelledby="tab1">
                        <div class="row border-bottom mb-3">
                            <div class="col-lg-6">
                                <div class="splide world-tab-1">
                                    <div class="splide__track">
                                        <ul class="splide__list">
                                            <li class="splide__slide mr-3">
                                                <div class="card">
                                                    <img src="{{ asset('img/about/ourcountry/main.jpg') }}" class="img-fluid" style="max-height: 200px!important;">
                                                    <div class="card-body">
                                                        <div class="" style="font-size: 18px; font-weight: 700; line-height: 1.3;"> Turbulent Mind Depict One of the Most Complex Concepts in Physics?</div>
                                                        <p class="text-secondary mt-3 w-75">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in... </p>
                                                        <a href="#" class="text-decoration-none text-secondary">Sep 29, 2017 at 9:48 am</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="splide__slide mr-3">
                                                <div class="card">
                                                    <img src="{{ asset('img/about/ourcountry/main-2.jpg') }}" class="img-fluid" style="max-height: 200px!important;">
                                                    <div class="card-body">
                                                        <div class="" style="font-size: 18px; font-weight: 700; line-height: 1.3;"> Turbulent Mind Depict One of the Most Complex Concepts in Physics?</div>
                                                        <p class="text-secondary mt-3 w-75">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in... </p>
                                                        <a href="#" class="text-decoration-none text-secondary">Sep 29, 2017 at 9:48 am</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="splide__slide mr-3">
                                                <div class="card">
                                                    <img src="{{ asset('img/about/ourcountry/main-3.jpg') }}" class="img-fluid" style="max-height: 200px!important;">
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
                        <div class="row border-bottom mb-3 p-3">
                            <div class="card border-0" style="background-color: transparent;">
                                <img src="{{ asset('img/about/ourcountry/main.jpg') }}" class="card-img">
                                <div class="card-body px-0">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="h3">Header</div>
                                        <span class="text-small text-muted">Katy Liu on Sep 29, 2017 at 9:48 amet</span>
                                    </div>
                                    <p class="text-dark">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius suscipit sunt fuga, hic sit repellat? Quis, quod. Quaerat, aspernatur? Autem beatae reprehenderit ut ea similique nihil iusto magnam ullam nobis.
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius suscipit sunt fuga, hic sit repellat? Quis, quod. Quaerat, aspernatur? Autem beatae reprehenderit ut ea similique nihil iusto magnam ullam nobis.
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius suscipit sunt fuga, hic sit repellat? Quis, quod. Quaerat, aspernatur? Autem beatae reprehenderit ut ea similique nihil iusto magnam ullam nobis.
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius suscipit sunt fuga, hic sit repellat? Quis, quod. Quaerat, aspernatur? Autem beatae reprehenderit ut ea similique nihil iusto magnam ullam nobis.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-6">
                                <div class="splide world-tab-2">
                                    <div class="splide__track">
                                        <ul class="splide__list">
                                            <li class="splide__slide mr-3">
                                                <div class="card">
                                                    <img src="{{ asset('img/about/ourcountry/main.jpg') }}" class="img-fluid" style="max-height: 200px!important;">
                                                    <div class="card-body">
                                                        <div class="" style="font-size: 18px; font-weight: 700; line-height: 1.3;"> Turbulent Mind Depict One of the Most Complex Concepts in Physics?</div>
                                                        <p class="text-secondary mt-3 w-75">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in... </p>
                                                        <a href="#" class="text-decoration-none text-secondary">Sep 29, 2017 at 9:48 am</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="splide__slide mr-3">
                                                <div class="card">
                                                    <img src="{{ asset('img/about/ourcountry/main-2.jpg') }}" class="img-fluid" style="max-height: 200px!important;">
                                                    <div class="card-body">
                                                        <div class="" style="font-size: 18px; font-weight: 700; line-height: 1.3;"> Turbulent Mind Depict One of the Most Complex Concepts in Physics?</div>
                                                        <p class="text-secondary mt-3 w-75">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in... </p>
                                                        <a href="#" class="text-decoration-none text-secondary">Sep 29, 2017 at 9:48 am</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="splide__slide mr-3">
                                                <div class="card">
                                                    <img src="{{ asset('img/about/ourcountry/main-3.jpg') }}" class="img-fluid" style="max-height: 200px!important;">
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
                    <div class="tab-pane fade" id="a1" role="tabpanel" aria-labelledby="1">
                        @foreach($cities as $city)
                        @if ($city->welayat_id == 1)

                        <div class="row border-bottom mb-3 p-3">
                            <div class="col-lg-6">
                                <a href="{{ route('ourcountry.show', $city->id) }}" class="card text-decoration-none">
                                    <img src="{{ asset($city->img) }}" class="img-fluid">
                                    <div class="card-body">
                                        <div class="text-dark" style="font-size: 18px; font-weight: 700; line-height: 1.3;">{{ $city->name }}</div>
                                        <div>
                                            <p class="text-secondary mt-3"><?php echo (substr($city['title'], 0, 150) . '...'); ?></p>
                                            <span class="text-decoration-none text-secondary">Sep 29, 2017 at 9:48 am</span>
                                        </div>
                                    </div>
                                </a>
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

                        @endif
                        @endforeach
                    </div>

                    <div class="tab-pane fade" id="a2" role="tabpanel" aria-labelledby="2">
                        @foreach($cities as $city)
                        @if ($city->welayat_id == 2)

                        {{ $city->welayat_id }}

                        @endif
                        @endforeach
                    </div>

                    <div class="tab-pane fade" id="a3" role="tabpanel" aria-labelledby="3">
                        @foreach($cities as $city)
                        @if ($city->welayat_id == 3)

                        {{ $city->welayat_id }}

                        @endif
                        @endforeach
                    </div>

                    <div class="tab-pane fade" id="a4" role="tabpanel" aria-labelledby="4">
                        @foreach($cities as $city)
                        @if ($city->welayat_id == 4)

                        {{ $city->welayat_id }}

                        @endif
                        @endforeach
                    </div>

                    <div class="tab-pane fade" id="a5" role="tabpanel" aria-labelledby="5">
                        @foreach($cities as $city)
                        @if ($city->welayat_id == 5)

                        {{ $city->welayat_id }}

                        @endif
                        @endforeach
                    </div>

                    <div class="tab-pane fade" id="a6" role="tabpanel" aria-labelledby="6">
                        @foreach($cities as $city)
                        @if ($city->welayat_id == 6)

                        {{ $city->welayat_id }}

                        @endif
                        @endforeach
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
                <div class="border-bottom pl-4 py-3 d-flex justify-content-between">
                    <img src="{{ asset('img/icons/telegram.svg') }}" class="img-fluid" style="width: 36px;">
                    <img src="{{ asset('img/icons/youtube.svg') }}" class="img-fluid" style="width: 36px;">
                    <img src="{{ asset('img/icons/tweter.svg') }}" class="img-fluid" style="width: 36px;">
                    <img src="{{ asset('img/icons/instagram.svg') }}" class="img-fluid" style="width: 36px;">
                    <img src="{{ asset('img/icons/tiktok.svg') }}" class="img-fluid" style="width: 36px;">
                    <img src="{{ asset('img/icons/message.svg') }}" class="img-fluid" style="width: 36px;">
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