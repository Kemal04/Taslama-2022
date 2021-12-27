<!DOCTYPE html>
<html lang="">

<head>
    @include ('app.meta')

    <title>Tebigaty Goramak</title>
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

    <div class="container my-5 py-5">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-4" data-aos="fade-up">
                <span class="mb-4 d-block text-green font-weight-bold">Biz barada</span>
                <h2 class="mb-4 font-weight-bold"> TEBIGAT BIZIŇ <br> ÖÝÜMIZ </h2>
                <p class="text-secondary">Soňky ýyllarda Türkmenistan öz ýaş tokaýlary, ýylyň dowamynda gök öwüsýän seýilgähleri, özboluşly suw çüwdürimleri, giň gök zolaklary bilen myhmanlary haýrana goýýan ýurda öwrüldi.</p>
                <p class="text-secondary">Ýurdumyzyň künjeklerinde, aýratyn-da, gözel paýtagtymyzyň töweregindäki dag eteklerinde el bilen döredilen ýaýlalar gök öwüsýär. Häzirki döwürde baýyrlyklar pürli we saýaly agaçlary bilen gözüňi dokundyrýar.</p>
                <p class="mt-5"><a href="{{ route('about.index') }}" class="btn btn-green">Köp maglumatlar</a></p>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('img/about/ourcountry/bagul.jpg') }}" alt="Image" class="img-fluid rounded">
            </div>
        </div>
    </div>

    <div class="container my-5 py-5">
        <div class="row">
            <div class="col-lg-12 mb-5 text-center" data-aos="fade-up">
                <span class="mb-4 d-block text-green font-weight-bold">Dünýä</span>
                <h2 class="mb-4 font-weight-bold">Tebigaty goramagyň meseleleri</h2>
            </div>
            @foreach($mains as $main)
            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                <div class="card border-0 mr-4" style="background-color: transparent;">
                    <img src="{{ asset( $main->img ) }}" class="img-fluid">
                    <div class="card-body p-0 my-3">
                        <span class="text-secondary mb-2 d-block">15 Jan 2020 <span class="mx-2">•</span> By Pastor Campbell </span>
                        <div class="my-3 h5">{{ $main->name }}</div>
                        <p class="mb-3 text-secondary"><?php echo (substr($main['title'], 0, 150) . '...'); ?></p>
                        <a href="{{ route('main.show', $main->id) }}" class="btn btn-green">Doly oka</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div style="background-color: rgb(16, 73, 92);">
        <div class="container py-5 my-5">
            <div class="row mb-5 justify-content-between align-items-center">
                <div class="col-lg-5" data-aos="fade-up">
                    <span class="d-block text-green font-weight-bold mb-4">Biz barada</span>
                    <h2 class="font-weight-bold text-white">Gysgaça soraglar we jogaplar bölümi</h2>
                </div>
                <div class="col-lg-5 align-self-end text-white" data-aos="fade-up" data-aos-delay="100">
                    <p>Suw, ýer we biologik serişdelerini netijeli peýdalanmak, biologik köpdürliligi we tebigy landşaftlary goramak, çölleşmä we tokaýlaryň ýitmegine garşy göreşmek babatda uly işler geçirilýär.</p>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-6" data-aos="fade-up">
                    <img src="{{ asset('img/banners/banner-card.jpg') }}" class="img-fluid">
                </div>
                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="text-white font-weight-bold h6">Tebigat bu näme zat?</div>
                            <p style="color: #ccc;">Öz-özünden bar bolan we hemişe adam işjeňliginiň daşynda özüni döredýän we üýtgedýän janly we jansyz zatlardan ybarat barlyk. </p>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="text-white font-weight-bold h6">Tebigy heläkçilikler?</div>
                            <p style="color: #ccc;">Tebigy betbagtçylyklar ömrüň we emlägiň ýitmegine sebäp bolýan tebigy hadysalardyr. Suw, ýer süýşmesi, göç, tupan, tornado we ýer titremesi tebigy betbagtçylyklardyr. </p>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="text-white font-weight-bold h6">Tebigaty näme üçin goramaly?</div>
                            <p style="color: #ccc;">Doğal çevre olmazsa insan nefes alacak oksijenden mahrum kalır, diğer hayvanlar yaşam alanı bulamaz. Çevre bu nedenle tüm canlılar için çok büyük bir gereksinimdir.</p>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="text-white font-weight-bold h6">Tebigaty näme üçin arassa saklamaly?</div>
                            <p style="color: #ccc;">Janly-jandarlar ýaly adamlar öz gurşawy bilen sazlaşykly ýaşamalydyrlar. Adam ömrüniň dowam etmegini üpjün edýän saglygy goramak diňe sagdyn we arassa gurşaw bilen mümkindir. </p>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-12">
                            <a href="{{ route('contact') }}" class="btn btn-green btn-block">Sorag ugrat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5 py-5 border shadow bg-white">
        <div class="row">
            <div class="col-lg-12 mb-5 text-center" data-aos="fade-up">
                <span class="mb-4 d-block text-green font-weight-bold">Sermons</span>
                <h2 class="mb-4 font-weight-bold">Ştiliň agaja öwrülmesi</h2>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                <div class="text-center">
                    <img src="{{ asset('img/icons/seed.svg') }}" class="img-fluid w-25 mb-3">
                    <div style="font-size: 18px; font-weight: 700;">Ştili topraga ýerleşdirmek</div>
                    <p class="text-secondary">Ilki bilen topragy ştile göra gazmaly we sonra ştili gazylan çukura ýerleşdirmeli</p>
                    <p><a href="#" class="text-green text-decoration-none">Doly oka</a></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                <div class="text-center">
                    <img src="{{ asset('img/icons/water.svg') }}" class="img-fluid w-25 mb-3">
                    <div style="font-size: 18px; font-weight: 700;">Ilkinji suwuny bermek</div>
                    <p class="text-secondary">Indi bolsa ştiliň ilkinji suwuny bermeli we her gün hem ştile ýeterlik suw berip durmaly</p>
                    <p><a href="#" class="text-green text-decoration-none">Doly oka</a></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                <div class="text-center">
                    <img src="{{ asset('img/icons/tree.svg') }}" class="img-fluid w-25 mb-3">
                    <div style="font-size: 18px; font-weight: 700;">Wagtyň geçmegi bilen</div>
                    <p class="text-secondary">Günleriň, aylaryň geçmegi bilen ştilimiz agaja öwrüler, miwe bermäge başlar</p>
                    <p><a href="#" class="text-green text-decoration-none">Doly oka</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bg py-5 mt-5">
        <div class="container py-5">
            <form>
                <div class="row align-items-center text-center justify-content-center">
                    <div class="col-lg-12 mb-5 display-4 border-bottom pb-3">
                        Tebigatyň ösmegine goşant goşuň
                    </div>
                    <div class="col-lg-12 h5 mb-5 font-weight-normal" style="line-height: 30px;">
                        - Tebigat adam üçin nämäni aňladýar? Bu – biziň dem alýan howamyz, içýän suwumyz, hasyl alýan topragymyz... Ol biziň saglygymyzyň we maddy durmuşymyzyň çeşmesidir
                    </div>
                    <div class="form-item">
                        <div class="radio-item mr-lg-5 mr-md-5 mr-sm-0 mr-0">
                            <input id="amount-20" type="radio" name="price1" value="20" checked="true">
                            <label for="amount-20">20 TMT</label>
                        </div>
                        <div class="radio-item mr-lg-5 mr-md-5 mr-sm-0 mr-0">
                            <input id="amount-50" type="radio" name="price1" value="50">
                            <label for="amount-50">50 TMT</label>
                        </div>
                        <div class="radio-item">
                            <input id="amount-100" type="radio" name="price1" value="100">
                            <label for="amount-100">100 TMT</label>
                        </div>
                    </div>
                    <div class="col-lg-12 my-4">
                        ya-da
                    </div>
                    
                    <div class="col-lg-12 d-flex justify-content-center">
                        <div class="w-50">
                            <button type="submit" class="btn btn-lg btn-block bg-green text-white font-weight-bolder">Kömek ber</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @include ('app.footer')

    @include ('app.script')

</body>

</html>