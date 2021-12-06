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

<div class="container text-center mt-5 pt-5">
    <div class="display-4 border-bottom pb-3">Habarlasmak</div>
</div>

<section>
    <div class="container my-5 py-5">
        <div class="row no-gutters">
            <div class="col-lg-4 bg-basic p-5 text-white shadow-lg">
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
            <div class="col-lg-8 shadow-lg p-5">
                <h3 class="mb-4">Get in touch</h3>
                <form method="POST" name="" action="" class="contactForm">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="label" for="name">Full Name</label>
                                <input type="text" class="form-control valid rounded-0" name="name" id="name"
                                       placeholder="Name" aria-required="true" aria-invalid="false">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="label" for="email">Email Address</label>
                                <input type="email" class="form-control error rounded-0" name="email" id="email"
                                       placeholder="Email" aria-required="true" aria-invalid="true">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="label" for="subject">Subject</label>
                                <input type="text" class="form-control valid rounded-0" name="subject" id="subject"
                                       placeholder="Subject" aria-required="true" aria-invalid="false">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="label" for="#">Message</label>
                                <textarea name="message" class="form-control valid rounded-0" id="message" cols="30" rows="4"
                                          placeholder="Message" aria-required="true" aria-invalid="false"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="" class="btn bg-basic shadow mt-3 text-white px-5" style="border-radius: 30px;">Send</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@include ('app.footer')

@include ('app.script')

</body>

</html>
