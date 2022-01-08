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
                                                        <div class="" style="font-size: 18px; font-weight: 700; line-height: 1.3;"> Tebigaty goramak umumy wezipämizdir</div>
                                                        <p class="text-secondary mt-3 w-75">–Türkmenistan 1996-njy ýylda ilkinjileriň biri bolup BMG-niň çölleşmä garşy göreş boýunça Konwensiýasyny tassyklady. Edil bir ýyldan soň ýurdumyzda amala aşyrylmaly işleriň </p>
                                                        <a href="#" class="text-decoration-none text-secondary">29.09.2017, 9:48</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="splide__slide mr-3">
                                                <div class="card">
                                                    <img src="{{ asset('img/about/ourcountry/main-2.jpg') }}" class="img-fluid" style="max-height: 200px!important;">
                                                    <div class="card-body">
                                                        <div class="" style="font-size: 18px; font-weight: 700; line-height: 1.3;"> Tebigaty aýawly saklamak – mukaddes borç</div>
                                                        <p class="text-secondary mt-3 w-75">Eziz Watanymyzyň tebigy baýlygyny we gözelligini aýawly saklamak, ony geljek nesillerimize ýetirmek – hormatly Prezidentimiz Gurbanguly Berdimuhamedowyň alyp </p>
                                                        <a href="#" class="text-decoration-none text-secondary">Sep 29, 2017 at 9:48 am</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="splide__slide mr-3">
                                                <div class="card">
                                                    <img src="{{ asset('img/about/ourcountry/main-3.jpg') }}" class="img-fluid" style="max-height: 200px!important;">
                                                    <div class="card-body">
                                                        <div class="" style="font-size: 18px; font-weight: 700; line-height: 1.3;"> Tebigaty aýawly saklamak – mukaddes borç</div>
                                                        <p class="text-secondary mt-3 w-75">Eziz Watanymyzyň tebigy baýlygyny we gözelligini aýawly saklamak, ony geljek nesillerimize ýetirmek – hormatly Prezidentimiz Gurbanguly Berdimuhamedowyň alyp </p>
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
                                            <img src="{{ asset('img/about/ourcountry/main-3.jpg') }}" class="card-img">
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body p-0 px-2 py-1">
                                                <div class="font-weight-bold">Tebigaty aýawly saklamak – mukaddes borç</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;"> 31.09.2021, 13:31</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3 shadow-sm">
                                    <div class="row no-gutters">
                                        <div class="col-md-3 d-flex justify-content-center">
                                            <img src="{{ asset('img/about/ourcountry/1.jpg') }}" class="card-img">
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body p-0 px-2 py-1">
                                                <div class="font-weight-bold">Daşky gurşawy goramagyň bütindünýä güni mynasybetli ylmy-amaly maslahat</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;">30.09.2021, 12:45</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3 shadow-sm">
                                    <div class="row no-gutters">
                                        <div class="col-md-3 d-flex justify-content-center">
                                            <img src="{{ asset('img/about/ourcountry/2.jpg') }}" class="card-img">
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body p-0 px-2 py-1">
                                                <div class="font-weight-bold">BMG-niň Biologik dürlülik hakyndaky konwensiýasy</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;">30.09.2021, 10:48</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3 shadow-sm">
                                    <div class="row no-gutters">
                                        <div class="col-md-3 d-flex justify-content-center">
                                            <img src="{{ asset('img/about/ourcountry/bagul.jpg') }}" class="card-img">
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body p-0 px-2 py-1">
                                                <div class="font-weight-bold">Daşky gurşawy goramak häzirki we geljekki nesiller barada aladadyr</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;">29.09.2021, 19:30</a></p>
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
                                        <div class="h3">Awaza milli syýahatçylyk zolagynda nobatdaky Forum</div>
                                    </div>
                                    <p class="text-dark">
                                        Türkmenistanyň Prezidenti Gurbanguly Berdimuhamedowyň başlangyjy boýunça 2018-nji ýylda Türkmenbaşy şäheriniň Awaza dynç alyş zolagynda Araly halas ediş Halkara gaznasyny döreden ýurtlaryň Sammitiniň bolup geçendigini alymyň sözlerine goşmak gerek. Şonda Sammitiň esasy resminamalarynyň biri hökmünde Merkezi Aziýa sebitinde Durnukly ösüş üçin daşky gurşawy goramak boýunça Sebit maksatnamasy işlenip düzüldi. Bellenen maksatnamany durmuşa geçirmek üçin, ýörite iş topary döredildi. Soňky döwürde Türkmenistanda çölleşmä garşy göreş we tokaý Maksatnamasynyň çäklerinde 100 müň gektardan gowrak ýere bag ekildi. Balygyň 20-den gowrak dürli görnüşi bellige alnan “Altyn asyr “ Türkmen kölüniň gurluşygy-da tebigaty goramak maksatlaryna ýardam edýär. Kölüň daşyny dürli ösümlikler gurşap alýar. Bu bolsa öz gezeginde haýwanlaryň we guşlaryň dürli görnüşleriniň amatly şertlerde köpelmegine ýardam edýär. Alymlaryň çöldäki öri ýerleriniň suw üpjünçiligini dikeltmek, gowulaşdyrmak, şeýle hem ýabany haýwanlary köpeltmek üçin amatly şertleri döretmek ugrundaky tagallalary-da çölleşmä garşy alnyp barylýan işleriň bir bölegidir.
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
                                                        <div class="" style="font-size: 18px; font-weight: 700; line-height: 1.3;"> Suw, ýer we biologik serişdelerini netijeli peýdalanmak</div>
                                                        <p class="text-secondary mt-3 w-75">Biologik köpdürliligi we tebigy landşaftlary goramak, çölleşmä we tokaýlaryň ýitmegine garşy göreşmek babatda uly işler geçirilýär. Türkmenistanda eýeçiliginiň görnüşine garamazdan...</p>
                                                        <a href="#" class="text-decoration-none text-secondary">Sep 29, 2017 at 9:48 am</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="splide__slide mr-3">
                                                <div class="card">
                                                    <img src="{{ asset('img/about/ourcountry/main-2.jpg') }}" class="img-fluid" style="max-height: 200px!important;">
                                                    <div class="card-body">
                                                        <div class="" style="font-size: 18px; font-weight: 700; line-height: 1.3;"> Suw, ýer we biologik serişdelerini netijeli peýdalanmak</div>
                                                        <p class="text-secondary mt-3 w-75">Biologik köpdürliligi we tebigy landşaftlary goramak, çölleşmä we tokaýlaryň ýitmegine garşy göreşmek babatda uly işler geçirilýär. Türkmenistanda eýeçiliginiň görnüşine garamazdan...</p>
                                                        <a href="#" class="text-decoration-none text-secondary">Sep 29, 2017 at 9:48 am</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="splide__slide mr-3">
                                                <div class="card">
                                                    <img src="{{ asset('img/about/ourcountry/main-3.jpg') }}" class="img-fluid" style="max-height: 200px!important;">
                                                    <div class="card-body">
                                                        <div class="" style="font-size: 18px; font-weight: 700; line-height: 1.3;"> Suw, ýer we biologik serişdelerini netijeli peýdalanmak</div>
                                                        <p class="text-secondary mt-3 w-75">Biologik köpdürliligi we tebigy landşaftlary goramak, çölleşmä we tokaýlaryň ýitmegine garşy göreşmek babatda uly işler geçirilýär. Türkmenistanda eýeçiliginiň görnüşine garamazdan...</p>
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
                                            <img src="{{ asset('img/about/ourcountry/2.jpg') }}" class="card-img">
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body p-0 px-2 py-1">
                                                <div class="font-weight-bold">Tebigaty goraýan jemgyýet ýangyç-energetika toplumynyň kärhanalary bilen nähili özara hereket edýär?</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;">29.09.2021, 15:32</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3 shadow-sm">
                                    <div class="row no-gutters">
                                        <div class="col-md-3 d-flex justify-content-center">
                                            <img src="{{ asset('img/about/ourcountry/bagul.jpg') }}" class="card-img">
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body p-0 px-2 py-1">
                                                <div class="font-weight-bold">Deňiz şypahanasynyň bagy-bossanlyga bürelmegin</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;">28.09.2021, 11:54</a></p>
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
                                                <div class="font-weight-bold"> Tebigaty goramak babatda esasy ýörelgeler</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;">27.09.2021, 20:32</a></p>
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
                                                <div class="font-weight-bold"> Hazar döwlet goraghanasynda täze haýwan saklanmaga başlandy</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;">27.09.2021, 17:35</a></p>
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
                                            <img src="{{ asset('img/about/ourcountry/main-3.jpg') }}" class="card-img">
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body p-0 px-2 py-1">
                                                <div class="font-weight-bold">Tebigaty aýawly saklamak – mukaddes borç</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;"> 31.09.2021, 13:31</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3 shadow-sm">
                                    <div class="row no-gutters">
                                        <div class="col-md-3 d-flex justify-content-center">
                                            <img src="{{ asset('img/about/ourcountry/1.jpg') }}" class="card-img">
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body p-0 px-2 py-1">
                                                <div class="font-weight-bold">Daşky gurşawy goramagyň bütindünýä güni mynasybetli ylmy-amaly maslahat</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;">30.09.2021, 12:45</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3 shadow-sm">
                                    <div class="row no-gutters">
                                        <div class="col-md-3 d-flex justify-content-center">
                                            <img src="{{ asset('img/about/ourcountry/2.jpg') }}" class="card-img">
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body p-0 px-2 py-1">
                                                <div class="font-weight-bold">BMG-niň Biologik dürlülik hakyndaky konwensiýasy</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;">30.09.2021, 10:48</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3 shadow-sm">
                                    <div class="row no-gutters">
                                        <div class="col-md-3 d-flex justify-content-center">
                                            <img src="{{ asset('img/about/ourcountry/bagul.jpg') }}" class="card-img">
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body p-0 px-2 py-1">
                                                <div class="font-weight-bold">Daşky gurşawy goramak häzirki we geljekki nesiller barada aladadyr</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;">29.09.2021, 19:30</a></p>
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
                    <div class="h5">Bellik: </div>
                </div>
                <div class="border-bottom pl-4 py-3">
                    <p class="text-secondary">
                    Bu ýerde siz dünýä ýurtlaryndaky bolup geçýän ähli täzelikleri okap bilersiňiz we olara baha berip bilersiňiz!
                    </p>
                </div>
                <div class="border-bottom pl-4 py-3">
                    <div class="h5">Iň täze habarlar</div>
                </div>
                <div class="border-bottom pl-4 py-3">
                    <div class="card mb-2 shadow-sm">
                        <div class="row no-gutters ">
                            <div class="col-md-3 d-flex justify-content-center">
                                <img src="{{ asset('img/about/ourcountry/bagul.jpg') }}" class="card-img">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body p-0 px-2 py-1">
                                    <div class="font-weight-bold">Tebigaty goramak babatda esasy ýörelgeler</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2 shadow-sm">
                        <div class="row no-gutters ">
                            <div class="col-md-3 d-flex justify-content-center">
                                <img src="{{ asset('img/about/ourcountry/bagul.jpg') }}" class="card-img">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body p-0 px-2 py-1">
                                    <div class="font-weight-bold">Daşky gurşawy goramak häzirki we geljekki nesiller barada aladadyr</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2 shadow-sm">
                        <div class="row no-gutters ">
                            <div class="col-md-3 d-flex justify-content-center">
                                <img src="{{ asset('img/about/ourcountry/bagul.jpg') }}" class="card-img">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body p-0 px-2 py-1">
                                    <div class="font-weight-bold">Tebigaty goraýan jemgyýet ýangyç-energetika toplumynyň kärhanalary...</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2 shadow-sm">
                        <div class="row no-gutters ">
                            <div class="col-md-3 d-flex justify-content-center">
                                <img src="{{ asset('img/about/ourcountry/bagul.jpg') }}" class="card-img">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body p-0 px-2 py-1">
                                    <div class="font-weight-bold">Tebigaty aýawly saklamak – mukaddes borç</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-bottom pl-4 py-3">
                    <div class="h5">Bize abuna boluň!</div>
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
                    <div class="h5">Hepdäň täzelikleri</div>
                </div>
                <div class="pl-4 py-3">
                    <div class="card border-0" style="background-color: transparent;">
                        <img src="{{ asset('img/about/ourcountry/bagul.jpg') }}" class="img-fluid rounded">
                        <div class="card-body">
                            <div class="" style="font-size: 18px; font-weight: 700; line-height: 1.3;"> Daşky gurşawy goramak häzirki we geljekki nesiller barada aladadyr</div>
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