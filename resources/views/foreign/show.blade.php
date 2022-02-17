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
            <div class="col-lg-8 col-md-8">
                <div class="h2 mb-3">{{ $foreign->name }}</div>
                <div><i class="fa fa-clock mb-3"></i> {{ $foreign->created_at }} </div>
                <img src="{{ asset($foreign->img) }}" class="img-fluid mb-5">
                <p style="line-height: 30px; font-size: 20px;">
                    {!! $foreign->title !!}
                </p>
            </div>

            <div class="col-lg-4 col-md-4 border-left">
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