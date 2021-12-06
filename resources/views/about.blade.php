<!DOCTYPE html>
<html lang="">

<head>
    @include ('app.meta')

    <title>27-nji Mekdep</title>
</head>

<body>

    @include ('app.navbar')

    <section class="banner-img">
        <div class="container-fluid" style="width: 85%;">
            <div class="row justify-content-end align-items-center">
                <div class="col-lg-8" data-aos="fade-right">
                    <img src="{{ asset('img/cards/banner-img.png') }}" class="img-fluid">
                </div>
                <div class="col-lg-4 text-right text-white" data-aos="fade-left">
                    <div class="display-3 mb-3" style="font-weight: 400;">Header</div>
                    <p class="h5 font-weight-normal" style="line-height: 30px;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa sunt iure minus alias deserunt,
                        dicta illum. Explicabo, minima assumenda voluptate id dicta, deleniti aspernatur aperiam dolores
                        saepe eligendi velit similique?
                    </p>
                    <div class="mt-3">
                        <a href="" class="btn btn-outline-light px-4" style="border-radius: 30px;">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container my-5 py-5">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <img src="{{ asset('img/cards/statik.jpg') }}" class="img-fluid" style="height: 200px;">
                        <div class="card-body text-center">
                            <div class="card-title h5">Statik</div>
                            <p class="card-text">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi et, voluptatum veritatis nemo sapiente nostrum delectus, molestias hic iure quis veniam porro est ipsum accusantium obcaecati quaerat temporibus id unde.
                            </p>
                            <a href="{{ route('about.statik') }}" class="btn btn-sm btn-outline-dark btn-block" style="border-radius: 30px;">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <img src="{{ asset('img/cards/world.jpg') }}" class="img-fluid" style="height: 200px;">
                        <div class="card-body text-center">
                            <div class="card-title h5">Statik</div>
                            <p class="card-text">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi et, voluptatum veritatis nemo sapiente nostrum delectus, molestias hic iure quis veniam porro est ipsum accusantium obcaecati quaerat temporibus id unde.
                            </p>
                            <a href="{{ route('about.foreign') }}" class="btn btn-sm btn-outline-dark btn-block" style="border-radius: 30px;">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <img src="{{ asset('img/cards/world.jpg') }}" class="img-fluid" style="height: 200px;">
                        <div class="card-body text-center">
                            <div class="card-title h5">Statik</div>
                            <p class="card-text">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi et, voluptatum veritatis nemo sapiente nostrum delectus, molestias hic iure quis veniam porro est ipsum accusantium obcaecati quaerat temporibus id unde.
                            </p>
                            <a href="{{ route('about.ourcountry') }}" class="btn btn-sm btn-outline-dark btn-block" style="border-radius: 30px;">More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid px-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6360365.127578056!2d55.02286416404438!3d38.88631666238773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f65cb5574bc6ccb%3A0x7edd826b4169a491!2sT%C3%BCrkmenistan!5e0!3m2!1str!2s!4v1637062056772!5m2!1str!2s" style="border: 1px; width: 100%; height: 500px" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>

    <section>
        <div class="container my-5 py-5">
            <div class="text-center">
                <div class="display-4">Header</div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt rerum soluta ut ipsum aperiam
                </p>
            </div>
            <div class="row no-gutters">
                @foreach($galleries->take(3) as $gallery)
                <div class="col-lg-4">

                    @foreach($galleries->take(3) as $gallery)
                    @if($loop->first)
                    <a href="{{ ($gallery->img) }}" data-fancybox="gallery">
                        <img src="{{ ($gallery->img) }}" class="img-fluid p-1">
                    </a>
                    @elseif($loop->last)
                    <a href="{{ ($gallery->img) }}" data-fancybox="gallery">
                        <img src="{{ ($gallery->img) }}" class="img-fluid p-1">
                    </a>
                    @else
                    <a href="{{ ($gallery->img) }}" data-fancybox="gallery">
                        <img src="{{ ($gallery->img) }}" class="img-fluid p-1">
                    </a>
                    @endif
                    @endforeach
                </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center mt-3">
                <a href="{{ route('gallery') }}" class="btn btn-outline-dark px-5" style="border-radius: 30px;">Gallery</a>
            </div>
        </div>
    </section>

    @include ('app.footer')

    @include ('app.script')

</body>

</html>