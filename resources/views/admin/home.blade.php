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
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Esasy Sahypa</h1>
                        </div>
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="container">
                    <div class="row">
                        @foreach($mains as $main)
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12" data-aos="fade-up">
                            <div class="card border-0 mr-4" style="background-color: transparent;">
                                <img src="{{ asset( $main->img ) }}" class="img-fluid">
                                <div class="card-body p-0 my-3 px-3">
                                    <span class="text-secondary mb-2 d-block">15 Ýanwar 2022 <span class="mx-2">•</span> Administrasiýa </span>
                                    <div class="my-3 h5">{{ $main->name }}</div>
                                    <p class="mb-3 text-secondary"><?php echo (substr($main['title'], 0, 120) . '...'); ?></p>
                                    <button class="btn btn-block btn-green btn-sm" type="button" data-toggle="modal" data-target="#exampleModal{{ $main->id }}">
                                        Üýtget
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModal{{ $main->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Düzediş giriz</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="" method="post" action="{{ route('main.update', $main->name) }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group mb-3">
                                                <label for="exampleInputEmail1">Ady</label>
                                                <input placeholder="{{ $main->name }}" type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Tekst</label>
                                                <textarea placeholder="{{ $main->title }}" name="title" placeholder="" class="form-control" id="exampleFormControlTextarea1" rows="10" required></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-green btn-block">Düzelt</button>
                                        </form>
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