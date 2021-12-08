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
                    <div data-aos="fade-left"><small style="letter-spacing: 2px; font-weight: 700;">Welcome to Byfaith church</small></div>
                    <div class="my-4">
                        <h1 data-aos="fade-left" class="font-weight-bold">Oh Safe To the Rock That Is Higher Than I</h1>
                    </div>
                    <div class="w-75">
                        <p class="mb-5" data-aos="fade-left" data-aos-delay="200">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p data-aos="fade-left" data-aos-delay="300" class=""><a href="#" class="btn btn-green">Go to sermons</a></p>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-left">
                    <img src="{{ asset('img/cards/banner-card.webp') }}" class="img-fluid w-75">
                </div>
            </div>
        </div>
    </section>

    <div class="container my-5 py-5">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-4" data-aos="fade-up">
                <span class="mb-4 d-block text-green font-weight-bold">About us</span>
                <h2 class="mb-4 font-weight-bold">Living and Sharing <br> The Gospel</h2>
                <p class="text-secondary">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p class="text-secondary">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <p class="mt-5"><a href="#" class="btn btn-green">Know more about us</a></p>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('img/cards/world.jpg') }}" alt="Image" class="img-fluid rounded">
            </div>
        </div>
    </div>

    <div class="container my-5 py-5">
        <div class="row">
            <div class="col-lg-12 mb-5 text-center" data-aos="fade-up">
                <span class="mb-4 d-block text-green font-weight-bold">Sermons</span>
                <h2 class="mb-4 font-weight-bold">Recent Sermons</h2>
            </div>
            @foreach($mains as $main)
            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                <div class="card border-0 mr-4" style="background-color: transparent;">
                    <img src="{{ asset( $main->img ) }}" class="img-fluid">
                    <div class="card-body p-0 my-3">
                        <span class="text-secondary mb-2 d-block">15 Jan 2020 <span class="mx-2">•</span> By Pastor Campbell </span>
                        <div class="my-3 h5">{{ $main->name }}</div>
                        <p class="mb-3 text-secondary">{{ $main->title }}</p>
                        <a href="{{ route('main.show', $main->id) }}" class="btn btn-green">About us</a>
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
                    <span class="d-block text-green font-weight-bold mb-4">Why Us</span>
                    <h2 class="font-weight-bold text-white">You matter to God, you matter to us.</h2>
                </div>
                <div class="col-lg-5 align-self-end text-white" data-aos="fade-up" data-aos-delay="100">
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6" data-aos="fade-up">
                    <img src="{{ asset('img/cards/jungle.jpg') }}" class="img-fluid w-75">
                </div>
                <div class="col-lg-5 ms-auto" data-aos="fade-up" data-aos-delay="100">
                    <div class="row g-4">
                        <div class="col-lg-6 mb-3">
                            <div class="text-white font-weight-bold h6">Peace with God</div>
                            <p style="color: #ccc;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. </p>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="text-white font-weight-bold h6">Relationship for the Soul</div>
                            <p style="color: #ccc;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. </p>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="text-white font-weight-bold h6">Identifying Limitations</div>
                            <p style="color: #ccc;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. </p>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="text-white font-weight-bold h6">His Kingdom</div>
                            <p style="color: #ccc;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. </p>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-12">
                            <a href="" class="btn btn-green">Send us your prayer request</a>
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
                <h2 class="mb-4 font-weight-bold">Recent Sermons</h2>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                <div class="text-center">
                    <img src="{{ asset('img/icons/seed.svg') }}" class="img-fluid w-25 mb-3">
                    <div style="font-size: 18px; font-weight: 700;">Praise and Worship</div>
                    <p class="text-secondary">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                    <p><a href="#" class="text-green text-decoration-none">+ Read more</a></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                <div class="text-center">
                    <img src="{{ asset('img/icons/water.svg') }}" class="img-fluid w-25 mb-3">
                    <div style="font-size: 18px; font-weight: 700;">Praise and Worship</div>
                    <p class="text-secondary">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                    <p><a href="#" class="text-green text-decoration-none">+ Read more</a></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                <div class="text-center">
                    <img src="{{ asset('img/icons/tree.svg') }}" class="img-fluid w-25 mb-3">
                    <div style="font-size: 18px; font-weight: 700;">Praise and Worship</div>
                    <p class="text-secondary">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                    <p><a href="#" class="text-green text-decoration-none">+ Read more</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bg py-5 mt-5">
        <div class="container py-5">
            <form action="" method="post">
                <div class="row align-items-center text-center justify-content-center">
                    <div class="col-lg-12 mb-5 display-4 border-bottom pb-3">
                        BAĞIŞÇIMIZ OLUN
                    </div>
                    <div class="col-lg-12 h5 mb-5 font-weight-normal">
                        Başta toprak olmak üzere tüm doğal varlıklarımızı korumak için yürüttüğümüz çalışmalara destek
                        olun.
                    </div>
                    <div class="form-item">
                        <div class="radio-item mr-lg-5 mr-md-5 mr-sm-0 mr-0">
                            <input id="amount-20" type="radio" name="amountValue" value="20" checked="true">
                            <label for="amount-20">20 ₺</label>
                        </div>
                        <div class="radio-item mr-lg-5 mr-md-5 mr-sm-0 mr-0">
                            <input id="amount-50" type="radio" name="amountValue" value="50">
                            <label for="amount-50">50 ₺</label>
                        </div>
                        <div class="radio-item">
                            <input id="amount-100" type="radio" name="amountValue" value="100">
                            <label for="amount-100">100 ₺</label>
                        </div>
                    </div>
                    <div class="col-lg-12 my-4">
                        veya
                    </div>
                    <div class="col-lg-12 d-flex justify-content-center">
                        <div class="input-group mb-3 w-50">
                            <input type="number" name="price" class="form-control" style="padding: 26px 20px!important;" placeholder="Bahasy" aria-label="Bahasy" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-lg-12 d-flex justify-content-center">
                        <div class="w-50">
                            <button type="submit" class="btn btn-lg btn-block bg-green text-white font-weight-bolder">BAGIS YAP</button>
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