<!DOCTYPE html>
<html lang="">

<head>
    @include ('app.meta')

    <title>27-nji Mekdep</title>
</head>

<body style="background-color: #f5f0e9; font-size: 14px;">

    @include ('app.navbar')

    <section class="banner">
        <div class="container-fluid" style="width: 85%;">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-4 text-white">
                    <div data-aos="fade-left"><small style="letter-spacing: 2px; font-weight: 700;">Jadyly tebigata Hoşgeldiniz!!!</small></div>
                    <div class="my-4">
                        <h1 data-aos="fade-left" class="font-weight-bold">Adam tebigatyň önümi. Tebigatyň per­zen­di!</h1>
                    </div>
                        <p class="mb-5" data-aos="fade-left" data-aos-delay="200">Ýurdumyzyň künjeklerinde, aýratyn-da, gözel paýtagtymyzyň töweregindäki dag eteklerinde el bilen döredilen ýaýlalar gök öwüsýär. Häzirki döwürde baýyrlyklar pürli we saýaly agaçlary bilen gözüňi dokundyrýar. El bilen döredilen tokaýlyklar ösüp boý alýar, her ýyl geçirilýän köpçülikleýin çäreler netijesinde, olaryň tutýan meýdany giňelýär.</p>
                        <p data-aos="fade-left" data-aos-delay="300" class=""><a href="#" class="btn btn-green">Köp maglumatlar</a></p>
                </div>
                <div class="col-lg-5" data-aos="fade-left">
                    <img src="{{ asset('img/cards/banner-card.JPG') }}" class="img-fluid w-75">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid my-5 py-5">
            <div class="text-center">
                <div class="display-4"> Galereýa </div>
                <p>
                Dünýädäki taysyz tebigy gözellikler
                </p>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-3">
                    <a href="{{ asset('img/gallery/1.jpg') }}" data-fancybox="gallery">
                        <img src="{{ asset('img/gallery/1.jpg') }}" class="img-fluid p-1">
                    </a>
                    <a href="{{ asset('img/gallery/2.jpg') }}" data-fancybox="gallery">
                        <img src="{{ asset('img/gallery/2.jpg') }}" class="img-fluid p-1">
                    </a>
                    <a href="{{ asset('img/gallery/4.jpg') }}" data-fancybox="gallery">
                        <img src="{{ asset('img/gallery/4.jpg') }}" class="img-fluid p-1">
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="{{ asset('img/gallery/5.jpg') }}" data-fancybox="gallery">
                        <img src="{{ asset('img/gallery/5.jpg') }}" class="img-fluid p-1">
                    </a>
                    <a href="{{ asset('img/gallery/3.jpg') }}" data-fancybox="gallery">
                        <img src="{{ asset('img/gallery/3.jpg') }}" class="img-fluid p-1">
                    </a>
                    <a href="{{ asset('img/gallery/1.jpg') }}" data-fancybox="gallery">
                        <img src="{{ asset('img/gallery/1.jpg') }}" class="img-fluid p-1">
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="{{ asset('img/gallery/1.jpg') }}" data-fancybox="gallery">
                        <img src="{{ asset('img/gallery/1.jpg') }}" class="img-fluid p-1">
                    </a>
                    <a href="{{ asset('img/gallery/2.jpg') }}" data-fancybox="gallery">
                        <img src="{{ asset('img/gallery/2.jpg') }}" class="img-fluid p-1">
                    </a>
                    <a href="{{ asset('img/gallery/4.jpg') }}" data-fancybox="gallery">
                        <img src="{{ asset('img/gallery/4.jpg') }}" class="img-fluid p-1">
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="{{ asset('img/gallery/5.jpg') }}" data-fancybox="gallery">
                        <img src="{{ asset('img/gallery/5.jpg') }}" class="img-fluid p-1">
                    </a>
                    <a href="{{ asset('img/gallery/3.jpg') }}" data-fancybox="gallery">
                        <img src="{{ asset('img/gallery/3.jpg') }}" class="img-fluid p-1">
                    </a>
                    <a href="{{ asset('img/gallery/1.jpg') }}" data-fancybox="gallery">
                        <img src="{{ asset('img/gallery/1.jpg') }}" class="img-fluid p-1">
                    </a>
                </div>
            </div>
        </div>
    </section>

    @include ('app.footer')

    @include ('app.script')

</body>

</html>