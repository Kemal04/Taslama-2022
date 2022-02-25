<!DOCTYPE html>
<html lang="">

<head>
    @include ('app.meta')

    <title>Tebigaty Goramak | Habarlaşmak</title>
</head>

<body style="background-color: #f5f0e9; font-size: 14px;">

    @include ('app.navbar')

    
    <section class="banner">
        <div class="container-fluid" style="width: 85%;">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-4 text-white">
                    <div data-aos="fade-left"><small style="letter-spacing: 2px; font-weight: 700;">Jadyly tebigata Hoşgeldiniz!!!</small></div>
                    <div class="my-4">
                        <h1 data-aos="fade-left" class="font-weight-bold">Tebigaty aýawly saklamak – mukaddes borçdyr</h1>
                    </div>
                    <p class="mb-5" data-aos="fade-left" data-aos-delay="200">Ýurdumyzyň künjeklerinde, aýratyn-da, gözel paýtagtymyzyň töweregindäki dag eteklerinde el bilen döredilen ýaýlalar gök öwüsýär. Häzirki döwürde baýyrlyklar pürli we saýaly agaçlary bilen gözüňi dokundyrýar. El bilen döredilen tokaýlyklar ösüp boý alýar, her ýyl geçirilýän köpçülikleýin çäreler netijesinde, olaryň tutýan meýdany giňelýär.</p>
                    <p data-aos="fade-left" data-aos-delay="300" class=""><a href="{{ route('ourcountry.index') }}" class="btn btn-green">Köp maglumatlar</a></p>
                </div>
                <div class="col-lg-5" data-aos="fade-left">
                    <img src="{{ asset('img/banners/card.jpeg') }}" class="img-fluid w-75">
                </div>
            </div>
        </div>
    </section>

    <div class="container text-center mt-5 pt-5">
        <div class="display-4 border-bottom pb-3">Habarlaşmak</div>
    </div>

    <section>
        <div class="container my-5 py-5">
            <div class="row no-gutters">
                <div class="col-lg-4 bg-green p-5 text-white shadow-lg" style="border-top-left-radius: 30px; border-bottom-left-radius: 30px;">
                    <div class="h3">Bize teswir galdyryň!</div>
                    <p class="mb-5">
                       Biz siziň saýtymyz we taslama işimiz baradaky teswirleriňize garaşýas
                    </p>
                    <div class="row align-items-center mb-3">
                        <div class="col-lg-3 d-flex justify-content-center">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="col-lg-8">
                           Salgymyz : Ahal welaýat Ak bugdaý etrap
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-lg-3 d-flex justify-content-center">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="col-lg-8">
                            Telefon: +993 64-66-66-66
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-lg-3 d-flex justify-content-center">
                            <i class="fas fa-paper-plane"></i>
                        </div>
                        <div class="col-lg-8">
                            Email: info@NatureProtect.com
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-lg-3 d-flex justify-content-center">
                            <i class="fas fa-globe"></i>
                        </div>
                        <div class="col-lg-8">
                            Websaýt: www.NatureProtect.com.tm
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 shadow-lg p-5 bg-white" style="border-top-right-radius: 30px; border-bottom-right-radius: 30px;">
                    <h3 class="mb-4">Habarlaşyň</h3>
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
                                    <button type="submit" class="btn btn-green mt-3 px-5" style="border-radius: 30px;">Ugrat</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- <div class="container my-5 py-5">
        <div id="main-slider" class="splide d-flex justify-content-center">
            <div class="splide__track" style="width: 90%!important;">
                <ul class="splide__list">
                    @foreach($contacts as $contact)

                    <li class="splide__slide mr-3">
                        <div class="card shadow border-0" style="border-radius: 30px;">
                            <div class="card-body">
                                <div class="" style="font-size: 18px; font-weight: 700; line-height: 1.3;">{{ $contact->subject }}</div>
                                <p class="text-secondary mt-3">{{ $contact->comment }}</p>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-user h5 border rounded-circle p-3"></i>
                                    <div class="ml-3">
                                        <div class="" style="font-size: 18px; font-weight: 700; line-height: 1.3;">{{ $contact->name }}</div>
                                        <div class="">{{ $contact->email }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    @endforeach
                </ul>
            </div>
        </div>
    </div> -->


    @include ('app.footer')

    @include ('app.script')

</body>

</html>