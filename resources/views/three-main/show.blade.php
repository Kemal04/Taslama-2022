<!DOCTYPE html>
<html lang="">

<head>
    <title>ThreeMain Show</title>

    @include('app.meta')
</head>

<body style="background: #f6f2ef">

    @include('app.navbar')

    <section class="about-banner"></section>

    <div class="container my-5 py-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="h2 mb-3">{{ $main->name }}</div>
                <p style="line-height: 30px; font-size: 20px;">
                    {!! $main->title !!}
                </p>
            </div>
            <div class="col-lg-4">
                <div class="">
                    <img src="{{ asset($main->img) }}" class="img-fluid mb-5">
                </div>
            </div>
        </div>
    </div>

    @include('app.footer')
    @include('app.script')
</body>

</html>