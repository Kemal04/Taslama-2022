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
                        <a class="nav-link text-dark" id="tab1" data-toggle="tab" href="#world-tab-1" role="tab" aria-controls="world-tab-1" aria-selected="true">Hemmesi</a>
                    </li>
                    @foreach($countries as $country)
                    <li class="nav-item">
                        <a class="nav-link text-dark" id="{{ $country->id }}" data-toggle="tab" href="#a{{ $country->id }}" role="tab" aria-controls="{{ $country->id }}" aria-selected="false">{{ $country->name }}</a>
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
                                                    <img src="{{ asset('img/small-img/4.jpg') }}" class="img-fluid">
                                                    <div class="card-body">
                                                        <div class="" style="font-size: 18px; font-weight: 700; line-height: 1.3;">Amerikanyň Peru şäherinde 7.5 bal derejede ýer titremesi boldy..</div>
                                                        <p class="text-secondary mt-3 w-75">ABŞ Geologiýa Gözleg gullugy (USGS) 7.5 ball ululykda ýer titremesiniň merkeziniň kenarýaka Barranca şäherinden 42 km demirgazyk-günbatarda bolandygyny habar berdi. </p>
                                                        <a href="#" class="text-decoration-none text-secondary">Yanwar 20, 2022 10:31</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="splide__slide mr-3">
                                                <div class="card">
                                                    <img src="{{ asset('img/small-img/3.jpg') }}" class="img-fluid">
                                                    <div class="card-body">
                                                        <div class="" style="font-size: 18px; font-weight: 700; line-height: 1.3;"> Amerikan agaç fermasy ulgamy (ATFS) Amerikadaky iň uly we iň gadymy tokaý şahadatnamasy ulgamydyr.</div>
                                                        <p class="text-secondary mt-3 w-75">Tokaý kepillendiriş sertifikaty programmasy tarapyndan halkara derejesinde ykrar edilýär</p>
                                                        <a href="#" class="text-decoration-none text-secondary">Yanwar 20, 2022 14:42</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="splide__slide mr-3">
                                                <div class="card">
                                                    <img src="{{ asset('img/small-img/2.jpg') }}" class="img-fluid">
                                                    <div class="card-body">
                                                        <div class="" style="font-size: 18px; font-weight: 700; line-height: 1.3;"> Rusyanyň esasy agaçlarynyň biri bolan Sibir Sosnasy...</div>
                                                        <p class="text-secondary mt-3 w-75">Taslamany öwreniş agajy arkaly daşky gurşaw bilimini durnukly dolandyrmagy maksat edinýän milli tokaý guramasy bolan Amerikan tokaý gaznasyna degişlidir</p>
                                                        <a href="#" class="text-decoration-none text-secondary">Yanwar 20, 2022 18:50</a>
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
                                                <div class="font-weight-bold">Özüne we kökleriniň topragyna eýe bolan dub agajy</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;">Yanwar 20, 2022 19:12</a></p>
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
                                                <div class="font-weight-bold">Tebigatyň ähli elementleri biri-biri bilen berk baglanyşyklydyr.</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;">Yanwar 20, 2022 16:50</a></p>
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
                                                <div class="font-weight-bold">Iň çalt ösýän agac bambuk</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;">Yanwar 20, 2022 13:02</a></p>
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
                                                <div class="font-weight-bold">Haýsy ösümlikler has gowudyr?</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;">Yanwar 20, 2022 09:20</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border-bottom mb-3 p-3">
                            <div class="card border-0" style="background-color: transparent;">
                                <img src="{{ asset('img/about/foreign/main/usa.jpg') }}" class="card-img">
                                <div class="card-body px-0">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="h3">Amerikan agaç ferma ulgamy</div>
                                        <span class="text-small text-muted">Yanwar 20, 2022 20:23</span>
                                    </div>
                                    <p class="text-dark">
                                        Amerikan agaç fermasy ulgamy (ATFS) Amerikadaky iň uly we iň gadymy tokaý şahadatnamasy ulgamydyr. Tokaý kepillendiriş sertifikaty programmasy tarapyndan halkara derejesinde ykrar edilýär we berk üçünji tarap şahadatnama standartlaryna laýyk gelýär. Häzirki wagtda ABŞ-da ykrar edilen üç sany sertifikatlaşdyryş ulgamynyň biridir (beýlekiler arasynda Tokaý Dolandyryş Geňeşi we Durnukly Tokaý Başlangyjy). ATFS, esasan, şahsyýetler we maşgalalar tarapyndan saklanýan tokaýlary tassyklamakda ýöriteleşýär we häzirki wagtda 24 million gektar (110,000 km²) tokaý meýdany tutýar. ATFS kepillendiriş standarty, Amerikan tokaý ýerleriniň durnukly dolandyrylyşyny we Taslamany öwreniş agajy arkaly daşky gurşaw bilimini durnukly dolandyrmagy maksat edinýän milli tokaý guramasy bolan Amerikan tokaý gaznasyna degişlidir.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="a1" role="tabpanel" aria-labelledby="1">
                        @foreach($foreigns as $foreign)
                        @if ($foreign->country_id == 1)

                        <div class="row border-bottom mb-3 p-3">
                            <div class="col-lg-6">
                                <a href="{{ route('foreign.show', $foreign->id) }}" class="card text-decoration-none">
                                    <img src="{{ asset($foreign->img) }}" class="img-fluid">
                                    <div class="card-body">
                                        <div class="text-dark" style="font-size: 18px; font-weight: 700; line-height: 1.3;">{{ $foreign->name }}</div>
                                        <div>
                                            <p class="text-secondary mt-3"><?php echo (substr($foreign['title'], 0, 150) . '...'); ?></p>
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
                                                <div class="font-weight-bold">Özüne we kökleriniň topragyna eýe bolan dub agajy</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;">Yanwar 20, 2022 19:12</a></p>
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
                                                <div class="font-weight-bold">Tebigatyň ähli elementleri biri-biri bilen berk baglanyşyklydyr.</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;">Yanwar 20, 2022 16:50</a></p>
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
                                                <div class="font-weight-bold">Iň çalt ösýän agac bambuk</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;">Yanwar 20, 2022 13:02</a></p>
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
                                                <div class="font-weight-bold">Haýsy ösümlikler has gowudyr?</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;">Yanwar 20, 2022 09:20</a></p>
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
                        @foreach($foreigns as $foreign)
                        @if ($foreign->country_id == 2)

                        <div class="row border-bottom mb-3 p-3">
                            <div class="col-lg-6">
                                <a href="{{ route('foreign.show', $foreign->id) }}" class="card text-decoration-none">
                                    <img src="{{ asset($foreign->img) }}" class="img-fluid">
                                    <div class="card-body">
                                        <div class="text-dark" style="font-size: 18px; font-weight: 700; line-height: 1.3;">{{ $foreign->name }}</div>
                                        <div>
                                            <p class="text-secondary mt-3"><?php echo (substr($foreign['title'], 0, 150) . '...'); ?></p>
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
                                                <div class="font-weight-bold">Özüne we kökleriniň topragyna eýe bolan dub agajy</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;">Yanwar 20, 2022 19:12</a></p>
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
                                                <div class="font-weight-bold">Tebigatyň ähli elementleri biri-biri bilen berk baglanyşyklydyr.</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;">Yanwar 20, 2022 16:50</a></p>
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
                                                <div class="font-weight-bold">Iň çalt ösýän agac bambuk</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;">Yanwar 20, 2022 13:02</a></p>
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
                                                <div class="font-weight-bold">Haýsy ösümlikler has gowudyr?</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;">Yanwar 20, 2022 09:20</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endif
                        @endforeach
                    </div>

                    <div class="tab-pane fade" id="a3" role="tabpanel" aria-labelledby="3">
                        @foreach($foreigns as $foreign)
                        @if ($foreign->country_id == 3)

                        <div class="row border-bottom mb-3 p-3">
                            <div class="col-lg-6">
                                <a href="{{ route('foreign.show', $foreign->id) }}" class="card text-decoration-none">
                                    <img src="{{ asset($foreign->img) }}" class="img-fluid">
                                    <div class="card-body">
                                        <div class="text-dark" style="font-size: 18px; font-weight: 700; line-height: 1.3;">{{ $foreign->name }}</div>
                                        <div>
                                            <p class="text-secondary mt-3"><?php echo (substr($foreign['title'], 0, 150) . '...'); ?></p>
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
                                                <div class="font-weight-bold">Özüne we kökleriniň topragyna eýe bolan dub agajy</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;">Yanwar 20, 2022 19:12</a></p>
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
                                                <div class="font-weight-bold">Tebigatyň ähli elementleri biri-biri bilen berk baglanyşyklydyr.</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;">Yanwar 20, 2022 16:50</a></p>
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
                                                <div class="font-weight-bold">Iň çalt ösýän agac bambuk</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;">Yanwar 20, 2022 13:02</a></p>
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
                                                <div class="font-weight-bold">Haýsy ösümlikler has gowudyr?</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;">Yanwar 20, 2022 09:20</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endif
                        @endforeach
                    </div>

                    <div class="tab-pane fade" id="a4" role="tabpanel" aria-labelledby="4">
                        @foreach($foreigns as $foreign)
                        @if ($foreign->country_id == 4)

                        <div class="row border-bottom mb-3 p-3">
                            <div class="col-lg-6">
                                <a href="{{ route('foreign.show', $foreign->id) }}" class="card text-decoration-none">
                                    <img src="{{ asset($foreign->img) }}" class="img-fluid">
                                    <div class="card-body">
                                        <div class="text-dark" style="font-size: 18px; font-weight: 700; line-height: 1.3;">{{ $foreign->name }}</div>
                                        <div>
                                            <p class="text-secondary mt-3"><?php echo (substr($foreign['title'], 0, 150) . '...'); ?></p>
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
                                                <div class="font-weight-bold">Özüne we kökleriniň topragyna eýe bolan dub agajy</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;">Yanwar 20, 2022 19:12</a></p>
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
                                                <div class="font-weight-bold">Tebigatyň ähli elementleri biri-biri bilen berk baglanyşyklydyr.</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;">Yanwar 20, 2022 16:50</a></p>
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
                                                <div class="font-weight-bold">Iň çalt ösýän agac bambuk</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;">Yanwar 20, 2022 13:02</a></p>
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
                                                <div class="font-weight-bold">Haýsy ösümlikler has gowudyr?</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;">Yanwar 20, 2022 09:20</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endif
                        @endforeach
                    </div>

                    <div class="tab-pane fade" id="a5" role="tabpanel" aria-labelledby="5">
                        @foreach($foreigns as $foreign)
                        @if ($foreign->country_id == 5)

                        <div class="row border-bottom mb-3 p-3">
                            <div class="col-lg-6">
                                <a href="{{ route('foreign.show', $foreign->id) }}" class="card text-decoration-none">
                                    <img src="{{ asset($foreign->img) }}" class="img-fluid">
                                    <div class="card-body">
                                        <div class="text-dark" style="font-size: 18px; font-weight: 700; line-height: 1.3;">{{ $foreign->name }}</div>
                                        <div>
                                            <p class="text-secondary mt-3"><?php echo (substr($foreign['title'], 0, 150) . '...'); ?></p>
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
                                                <div class="font-weight-bold">Özüne we kökleriniň topragyna eýe bolan dub agajy</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;">Yanwar 20, 2022 19:12</a></p>
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
                                                <div class="font-weight-bold">Tebigatyň ähli elementleri biri-biri bilen berk baglanyşyklydyr.</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;">Yanwar 20, 2022 16:50</a></p>
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
                                                <div class="font-weight-bold">Iň çalt ösýän agac bambuk</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;">Yanwar 20, 2022 13:02</a></p>
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
                                                <div class="font-weight-bold">Haýsy ösümlikler has gowudyr?</div>
                                                <p class="mt-2"><a href="#" class="text-secondary" style="font-size: 12px;">Yanwar 20, 2022 09:20</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

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
                                <img src="{{ asset('img/small-img/1.webp') }}" class="card-img">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body p-0 px-2 py-1">
                                    <div class="font-weight-bold">Tokaýlaryň ähmiýetine düşünmek</div>
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
                                    <div class="font-weight-bold">Siziň pikiriňizçe dünýäde jemi näçe agaç bar?</div>
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
                                    <div class="font-weight-bold">Leonardo da Winçiniň agaçlar hakda gyzykly açyşy!</div>
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
                                    <div class="font-weight-bold">Ösümlikler bizi has sagdyn, bagtly we öndürijilikli edýärmi?</div>
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
                        <img src="{{ asset('img/small-img/2.jpg') }}" class="img-fluid rounded">
                        <div class="card-body">
                            <div class="" style="font-size: 18px; font-weight: 700; line-height: 1.3;"> Amerikan agaç fermasy ulgamy (ATFS) Amerikadaky iň uly we iň gadymy tokaý şahadatnamasy ulgamydyr.</div>
                        </div>
                    </div>
                    <div class="card border-0" style="background-color: transparent;">
                        <img src="{{ asset('img/small-img/4.jpg') }}" class="img-fluid rounded">
                        <div class="card-body">
                            <div class="" style="font-size: 18px; font-weight: 700; line-height: 1.3;"> Tebigatyň ähli elementleri biri-biri bilen berk baglanyşyklydyr.</div>
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