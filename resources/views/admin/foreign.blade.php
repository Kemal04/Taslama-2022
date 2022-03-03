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
                            <h1 class="m-0 text-dark">Daşary ýurtdaky täzelikler</h1>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="" class="m-0 text-dark h4">
                                <i class="fas fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <section class="content">
                    <div class="container">
                        <div class="row">
                            @foreach($foreigns as $foreign)
                            <div class="col-lg-4">
                                <div class="card">
                                    <img src="{{ asset($foreign->img) }}" class="img-fluid" style="height: 200px!important;">
                                    <div class="card-body text-center">
                                        <div class="card-header">{{ substr($foreign->name, 0, 30) }}...</div>
                                        <div class="card-text">{{ substr($foreign->title, 0, 90) }}...</div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            </div>
        </div>

        @include('app.script')
        <script src="{{ asset('js/admin.js') }}"></script>
</body>

</html>