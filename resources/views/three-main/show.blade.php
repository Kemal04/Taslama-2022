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
            <div class="col-lg-12">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="h2 mb-3">{{ $main->name }}</div>
                    <div><i class="fa fa-clock"></i> 12.01.2022</div>
                </div>
                <img src="{{ asset($main->img) }}" class="img-fluid mb-5">
                <p style="line-height: 30px; font-size: 20px;">
                    {!! $main->title !!}
                </p>
            </div>
        </div>
    </div>

    @include('app.footer')
    @include('app.script')
</body>

</html>