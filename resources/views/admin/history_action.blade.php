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
                    <div class="row my-3 justify-content-between align-items-center">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Geçirilen çäreler</h1>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="" class="m-0 text-dark h4">
                                <i class="fas fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($history_actions as $history_action)
                        <div class="col-lg-4">
                            <div class="card border-0" style="background-color: transparent;">
                                <img src="{{ asset('img/banners/card.jpeg') }}" class="img-fluid">
                                <div class="card-body my-3">
                                    <div class="row align-items-center">
                                        <div class="col-sm-4">
                                            <h6 class="mb-0">Çäräň ýerleşýän ýeri</h6>
                                        </div>
                                        <div class="col-sm-8 text-secondary">
                                            {{ $history_action->address }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row align-items-center">
                                        <div class="col-lg-4">
                                            <h6 class="mb-0">Edilmeli işler</h6>
                                        </div>
                                        <div class="col-lg-8 text-secondary">
                                            {{ $history_action->misson }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row mb-3 align-items-center">
                                        <div class="col-lg-4">
                                            <h6 class="mb-0">Edimeli işiň mukdary</h6>
                                        </div>
                                        <div class="col-lg-8 text-secondary">
                                            {{ $history_action->misson_amount }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h6 class="mb-0">Çäräniň başlaýan wagty</h6>
                                        </div>
                                        <div class="col-lg-8 text-secondary">
                                            {{ $history_action->time_start }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h6 class="mb-0">Geçirilen çäräň çagty</h6>
                                        </div>
                                        <div class="col-lg-8 text-secondary">
                                            {{ $history_action->time }} sagat
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
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