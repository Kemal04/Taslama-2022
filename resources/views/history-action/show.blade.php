<!DOCTYPE html>
<html lang="">

<head>
    <title>Tebigaty Goramak | {{ $history_action->name }}</title>

    @include('app.meta')
</head>

<body style="background: #f6f2ef; font-size: 14px;">

    @include('app.navbar')


    <section class="about-banner"></section>

    <div class="container py-5 my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-8">

                <div class="card border-0 mr-4" style="background-color: transparent;">
                    <img src="{{ asset('img/banners/card.jpeg') }}" class="img-fluid">
                    <div class="card-body p-0 my-3">
                        <span class="text-secondary mb-2 d-block">{{ $history_action->created_at }} <span class="mx-2">•</span> Administrasiýa </span>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="my-3 mb-4 h5">{{ $history_action->name }}</div>
                            <i class="fas fa-plus"></i>
                        </div>
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
                        <hr>
                        <div class="row">
                            <div class="col-lg-4">
                                <h6 class="mb-0">Çäräniň başlaýan wagty</h6>
                            </div>
                            <div class="col-lg-8 text-secondary">
                                {{ $history_action->time_start }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4">
                                <h6 class="mb-0">Geçirilen çäräň çagty</h6>
                            </div>
                            <div class="col-lg-8 text-secondary">
                                {{ $history_action->time }} sagat
                            </div>
                        </div>
                    </div>
                </div>
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
                    <div class="h5">Goşulan adamlaryň sany</div>
                </div>
                <div class="pl-4 py-3">
                    <div class="row">
                        <div class="col-lg-3 mb-3">
                            <div class="d-flex flex-column align-items-center">
                                <img src="{{ asset('img/user.svg') }}" class="img-fluid" style="width: 36px;">
                                <div>Kemal</div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <div class="d-flex flex-column align-items-center">
                                <img src="{{ asset('img/user.svg') }}" class="img-fluid" style="width: 36px;">
                                <div>Mergen</div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <div class="d-flex flex-column align-items-center">
                                <img src="{{ asset('img/user.svg') }}" class="img-fluid" style="width: 36px;">
                                <div>Ahmet</div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <div class="d-flex flex-column align-items-center">
                                <img src="{{ asset('img/user.svg') }}" class="img-fluid" style="width: 36px;">
                                <div>Yunus</div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <div class="d-flex flex-column align-items-center">
                                <img src="{{ asset('img/user.svg') }}" class="img-fluid" style="width: 36px;">
                                <div>Babageldi</div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <div class="d-flex flex-column align-items-center">
                                <img src="{{ asset('img/user.svg') }}" class="img-fluid" style="width: 36px;">
                                <div>Jeyhun</div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <div class="d-flex flex-column align-items-center">
                                <img src="{{ asset('img/user.svg') }}" class="img-fluid" style="width: 36px;">
                                <div>Kerimberdi</div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <div class="d-flex flex-column align-items-center">
                                <img src="{{ asset('img/user.svg') }}" class="img-fluid" style="width: 36px;">
                                <div>Allanur</div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <div class="d-flex flex-column align-items-center">
                                <img src="{{ asset('img/user.svg') }}" class="img-fluid" style="width: 36px;">
                                <div>Wepa</div>
                            </div>
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