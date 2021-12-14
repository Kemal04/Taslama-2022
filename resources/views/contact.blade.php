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
                    <img src="{{ asset('img/cards/banner-card.JPG') }}" class="img-fluid w-75">
                </div>
            </div>
        </div>
    </section>

    <div class="container text-center mt-5 pt-5">
        <div class="display-4 border-bottom pb-3">Habarlasmak</div>
    </div>

    <section>
        <div class="container my-5 py-5">
            <div class="row no-gutters">
                <div class="col-lg-4 bg-green p-5 text-white shadow-lg" style="border-top-left-radius: 30px; border-bottom-left-radius: 30px;">
                    <div class="h3">Let's get in touch</div>
                    <p class="mb-5">
                        We're open for any suggestion or just to have a chat
                    </p>
                    <div class="row align-items-center mb-3">
                        <div class="col-lg-3 d-flex justify-content-center">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="col-lg-8">
                            Address: 198 West 21th Street, Suite 721 New York NY 10016
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-lg-3 d-flex justify-content-center">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="col-lg-8">
                            Phone: + 1235 2355 98
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-lg-3 d-flex justify-content-center">
                            <i class="fas fa-paper-plane"></i>
                        </div>
                        <div class="col-lg-8">
                            Email: info@yoursite.com
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-lg-3 d-flex justify-content-center">
                            <i class="fas fa-globe"></i>
                        </div>
                        <div class="col-lg-8">
                            Website yoursite.com
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 shadow-lg p-5 bg-white" style="border-top-right-radius: 30px; border-bottom-right-radius: 30px;">
                    <h3 class="mb-4">Get in touch</h3>
                    <form method="post" action="{{ route('contact.store') }}" class="contactForm">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label" for="name">Full Name</label>
                                    <input type="text" class="form-control valid rounded-0" name="name" id="name" placeholder="Name" aria-required="true" aria-invalid="false" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label" for="email">Email Address</label>
                                    <input type="email" class="form-control error rounded-0" name="email" id="email" placeholder="Email" aria-required="true" aria-invalid="true" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="label" for="subject">Subject</label>
                                    <input type="text" class="form-control valid rounded-0" name="subject" id="subject" placeholder="Subject" aria-required="true" aria-invalid="false" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="label" for="#">Commendt</label>
                                    <textarea name="comment" class="form-control valid rounded-0" id="comment" cols="30" rows="4" placeholder="Comment" aria-required="true" aria-invalid="false" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button class="btn btn-green mt-3 px-5" style="border-radius: 30px;">Send</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div class="container my-5 py-5">
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
    </div>


    @include ('app.footer')

    @include ('app.script')

</body>

</html>