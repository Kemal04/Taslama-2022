<!DOCTYPE html>
<html lang="">

<head>
    @include ('app.meta')

    <title>Tebigaty Goramak | {{ auth()->user()->name }}</title>
</head>

<body style="background-color: #f5f0e9; font-size: 14px;">

    <div class="container my-5">
        <div class="main-body">
            <div class="row gutters-sm">
                <div class="col-md-4 col-lg-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="{{ asset('img/banners/card.jpeg') }}" alt="Admin" class="rounded-circle img-fluid" width="150">
                                <div class="mt-3">
                                    <h4>{{ auth()->user()->name }}</h4>
                                    <p class="text-secondary mb-1">+993 {{ auth()->user()->phone_number }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="list-group" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active" id="list-home" data-toggle="list" href="#home" role="tab" aria-controls="home"><i class="fas fa-book"></i> Maglumatlar</a>
                            <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile"><i class="fas fa-clock"></i> Çärä Gatnaşan maglumatlarym</a>
                            <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages"><i class="fas fa-map-marker-alt"></i> Kömek Pullarym</a>
                            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings"><i class="fas fa-bell"></i> Teklip Bermek</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="list-home">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Doly Ady</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ auth()->user()->name }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Familyasy</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ auth()->user()->surename }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">E-mail adressi</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ auth()->user()->email }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Telefon belgisi</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            +993 {{ auth()->user()->phone_number }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                            <div class="card mb-3">
                                <div class="row justify-content-center text-center mt-3">
                                    <div class="h3">1. Saglyk ýol</div>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <h6 class="mb-0">Çäräň ýerleşýän ýeri</h6>
                                        </div>
                                        <div class="col-sm-8 text-secondary">
                                            Aşgabat şäheri, Saglyk ýoly
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h6 class="mb-0">Edilin işler</h6>
                                        </div>
                                        <div class="col-lg-8 text-secondary">
                                            Agaç ekmek
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h6 class="mb-0">Edilen işiň mukdary</h6>
                                        </div>
                                        <div class="col-lg-8 text-secondary">
                                            3 agaç ekildi
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h6 class="mb-0">Näçe sagatlyk çäre</h6>
                                        </div>
                                        <div class="col-lg-8 text-secondary">
                                            2 sagat
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h6 class="mb-0">Çärädäki işjeňligim</h6>
                                        </div>
                                        <div class="col-lg-8 text-secondary">
                                            <img src="{{ asset('img/icons/stars.svg') }}" class="img-fluid w-25">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                            @foreach($sendmoneys as $sendmoney)
                            <div class="card bg-green text-white mb-3 border-0 rounded-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h6 class="mb-0">Berilen Komek : {{ $sendmoney->money }} TMT</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            Berilen wagty : {{ $sendmoney->created_at }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                            <form method="post" action="{{ route('contact.store') }}" class="contactForm">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="label" for="name">Doly adyňyz</label>
                                            <input type="text" class="form-control valid rounded-0" name="name" id="name" placeholder="Mergen Muhammedov" aria-required="true" aria-invalid="false" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="label" for="email">Email Salgynyň</label>
                                            <input type="email" class="form-control error rounded-0" name="email" id="email" placeholder="test@gmail.com" aria-required="true" aria-invalid="true" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="label" for="subject">Temaňyz</label>
                                            <input type="text" class="form-control valid rounded-0" name="subject" id="subject" placeholder="Temanyz" aria-required="true" aria-invalid="false" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="label" for="#">Teswiriňiz</label>
                                            <textarea name="comment" class="form-control valid rounded-0" id="comment" cols="30" rows="4" placeholder="Teswiriniz" aria-required="true" aria-invalid="false" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button class="btn btn-green mt-3 px-5" style="border-radius: 30px;">Ugrat</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include ('app.script')

</body>

</html>