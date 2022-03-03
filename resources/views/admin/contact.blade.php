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
                    <div class="row my-3 justify-content-between align-items-center text-center">
                        <div class="col-sm-12">
                            <h1 class="m-0 text-dark">Teswirler </h1>
                        </div>
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="container">
                    <div class="row">
                        @foreach($contacts as $contact)
                        <div class="col-lg-4">
                            <div class="card bg-light">
                                <div class="card-header text-muted border-bottom-0">
                                    <i class="fa fa-envelope mr-2"></i> {{ $contact->email }}
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b>{{ $contact->name }}</b></h2>
                                            <p class="text-muted text-sm"><b>Barada : </b> {{ $contact->comment }} </p>
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