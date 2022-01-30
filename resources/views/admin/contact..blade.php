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
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Administrasiýa</h1>
                        </div>
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{ auth()->user()->latest()->first()->id }}</h3>

                                    <p>Okuwçylaryň sany</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">Hemme okuwçy<i class="fas fa-arrow-circle-right ml-2"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>1</h3>

                                    <p>Mugallymlaryň sany</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">Hemme okuwçy<i class="fas fa-arrow-circle-right ml-2"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3></h3>
                                    <p>Kitaplaryň sany</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="" class="small-box-footer">Hemme kitaplar<i class="fas fa-arrow-circle-right ml-2"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3></h3>
                                    <p>Galeriýa suratlar</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="" class="small-box-footer">Hemme suratlar<i class="fas fa-arrow-circle-right ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    
    @include('app.script')
    <script src="{{ asset('js/admin.js') }}"></script>
</body>

</html>