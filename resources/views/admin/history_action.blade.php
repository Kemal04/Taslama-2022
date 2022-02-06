<!DOCTYPE html>
<html>

<head>
    @include('app.meta')
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <title>Admin Panel</title>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('app.admin.navbar')
        @include('app.admin.sidebar')

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container">
                    <div class="row my-3 justify-content-between align-items-center text-center">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Geçirilen çäreler</h1>
                        </div>
                        <div class="col-sm-6">
                            <a href="" class="m-0 text-dark h4">
                                <i class="fas fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <img src="{{ asset('img/banners/card.jpeg') }}" class="img-fluid">
                                <div class="card-body">
                                    <div class="row justify-content-center align-items-center text-center">
                                        <div class="h4">
                                            Saglyk ýol
                                            <i class="fas fa-check-circle ml-3 text-success"></i>
                                        </div>
                                    </div>
                                    <hr>
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
                                            <h6 class="mb-0">Edilmeli işler</h6>
                                        </div>
                                        <div class="col-lg-8 text-secondary">
                                            Agaç ekmek
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h6 class="mb-0">Edimeli işiň mukdary</h6>
                                        </div>
                                        <div class="col-lg-8 text-secondary">
                                            1.000 agaç ekmeli
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h6 class="mb-0">Geçirilen çäräň çagty</h6>
                                        </div>
                                        <div class="col-lg-8 text-secondary">
                                            2 sagat
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h6 class="mb-0">Çäräniň başlaýan wagty</h6>
                                        </div>
                                        <div class="col-lg-8 text-secondary">
                                            13:00 | 13.05.2022
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card">
                                <img src="{{ asset('img/banners/card.jpeg') }}" class="img-fluid">
                                <div class="card-body">
                                    <div class="row justify-content-center align-items-center text-center">
                                        <div class="h4">
                                            Saglyk ýol
                                            <i class="fas fa-hourglass-half ml-3 text-warning"></i>
                                        </div>
                                    </div>
                                    <hr>
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
                                            <h6 class="mb-0">Edilmeli işler</h6>
                                        </div>
                                        <div class="col-lg-8 text-secondary">
                                            Agaç ekmek
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h6 class="mb-0">Edimeli işiň mukdary</h6>
                                        </div>
                                        <div class="col-lg-8 text-secondary">
                                            1.000 agaç ekmeli
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h6 class="mb-0">Geçirilen çäräň çagty</h6>
                                        </div>
                                        <div class="col-lg-8 text-secondary">
                                            2 sagat
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h6 class="mb-0">Çäräniň başlaýan wagty</h6>
                                        </div>
                                        <div class="col-lg-8 text-secondary">
                                            13:00 | 13.05.2022
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card">
                                <img src="{{ asset('img/banners/card.jpeg') }}" class="img-fluid">
                                <div class="card-body">
                                    <div class="row justify-content-center align-items-center text-center">
                                        <div class="h4">
                                            Saglyk ýol
                                            <i class="fas fa-times-circle ml-3 text-danger"></i>
                                        </div>
                                    </div>
                                    <hr>
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
                                            <h6 class="mb-0">Edilmeli işler</h6>
                                        </div>
                                        <div class="col-lg-8 text-secondary">
                                            Agaç ekmek
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h6 class="mb-0">Edimeli işiň mukdary</h6>
                                        </div>
                                        <div class="col-lg-8 text-secondary">
                                            1.000 agaç ekmeli
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h6 class="mb-0">Geçirilen çäräň çagty</h6>
                                        </div>
                                        <div class="col-lg-8 text-secondary">
                                            2 sagat
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h6 class="mb-0">Çäräniň başlaýan wagty</h6>
                                        </div>
                                        <div class="col-lg-8 text-secondary">
                                            13:00 | 13.05.2022
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="container-fluid">

                </div>
            </section>
        </div>
    </div>

    @include('app.script')
    <script src="{{ asset('js/admin.js') }}"></script>
</body>

</html>