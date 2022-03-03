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
                            <h1 class="m-0 text-dark">Ulanyjylar</h1>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="" class="m-0 text-dark h4">
                                <i class="fas fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="container">
                    <div class="row">
                        @foreach($users as $user)
                        <div class="col-lg-4">
                            <div class="card bg-light">
                                <div class="card-header text-muted border-bottom-0">
                                    Ulanyjy
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b>{{ $user->name }} {{ $user->surename }}</b></h2>
                                            <p class="text-muted text-sm mb-5"></p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fa fa-envelope"></i></span> {{ $user->email }} </li>
                                                <li class="small"><span class="fa-li"><i class="fa fa-phone"></i></span>+993 {{ $user->phone_number }} </li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img src="{{ asset('img/user.svg') }}" alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">
                                        <a href="#" class="btn btn-sm bg-teal">
                                            <i class="fa fa-comments"></i>
                                        </a>
                                    </div>
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