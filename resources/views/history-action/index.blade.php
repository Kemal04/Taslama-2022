<!DOCTYPE html>
<html lang="">

<head>
    @include ('app.meta')

    <title>Tebigaty Goramak | Çäreler</title>
</head>

<body style="background-color: #f5f0e9; font-size: 14px;">

    @include ('app.navbar')

    <section class="banner">
        <div class="container-fluid" style="width: 85%;">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-4 text-white">
                    <div data-aos="fade-left"><small style="letter-spacing: 2px; font-weight: 700;">Jadyly tebigata Hoşgeldiniz!!!</small></div>
                    <div class="my-4">
                        <h1 data-aos="fade-left" class="font-weight-bold">Tebigaty aýawly saklamak - mukaddes borçdyr</h1>
                    </div>
                    <p class="mb-5" data-aos="fade-left" data-aos-delay="200">Ýurdumyzyň künjeklerinde, aýratyn-da, gözel paýtagtymyzyň töweregindäki dag eteklerinde el bilen döredilen ýaýlalar gök öwüsýär. Häzirki döwürde baýyrlyklar pürli we saýaly agaçlary bilen gözüňi dokundyrýar. El bilen döredilen tokaýlyklar ösüp boý alýar, her ýyl geçirilýän köpçülikleýin çäreler netijesinde, olaryň tutýan meýdany giňelýär.</p>
                    <p data-aos="fade-left" data-aos-delay="300" class=""><a href="{{ route('ourcountry.index') }}" class="btn btn-green">Köp maglumatlar</a></p>
                </div>
                <div class="col-lg-5 d-lg-block d-md-block d-sm-block d-none text-center" data-aos="fade-left">
                    <img src="{{ asset('img/banners/card.jpeg') }}" class="img-fluid w-75">
                </div>
            </div>
        </div>
    </section>

    <div class="container my-5 py-5">
        <div class="row justify-content-around">
            <div class="col-lg-12 mb-5 text-center" data-aos="fade-up">
                <span class="mb-4 d-block text-green font-weight-bold">Tebigat</span>
                <h2 class="mb-4 font-weight-bold">Tebigaty goramak çäreleri</h2>
            </div>
            @foreach($history_actions as $history_action)
            <div class="col-lg-5 col-md-5 col-sm-12 col-12" data-aos="fade-up">
                <div class="card border-0 mr-4" style="background-color: transparent;">
                    <img src="{{ asset('img/banners/card.jpeg') }}" class="img-fluid">
                    <div class="card-body p-0 my-3">
                        <span class="text-secondary mb-2 d-block">{{ $history_action->created_at }} <span class="mx-2">•</span> Administrasiýa </span>
                        <div class="my-3 mb-4 h5">{{ $history_action->name }}</div>
                        <div class="row align-items-center">
                            <div class="col-sm-4">
                                <h6 class="mb-0">Çäräň ýerleşýän ýeri</h6>
                            </div>
                            <div class="col-sm-8 text-secondary">
                                {{ $history_action->address }}
                            </div>
                        </div>
                        <hr>
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <h6 class="mb-0">Edilmeli işler</h6>
                            </div>
                            <div class="col-lg-8 text-secondary">
                                {{ $history_action->misson }}
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3 align-items-center">
                            <div class="col-lg-4">
                                <h6 class="mb-0">Edimeli işiň mukdary</h6>
                            </div>
                            <div class="col-lg-8 text-secondary">
                                {{ $history_action->misson_amount }}
                            </div>
                        </div>
                        <a href="{{ route('history_action.show', $history_action->name) }}" class="btn btn-green btn-block mt-3">Doly oka</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    @include ('app.footer')
    @include ('app.script')
</body>

</html>