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
                            <div class="card">
                                <div class="card-body">
                                    <div class="row justify-content-center align-items-center text-center">
                                        <div class="h4">
                                            {{ $contact->name }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <h6 class="mb-0">E-mail</h6>
                                        </div>
                                        <div class="col-sm-8 text-secondary">
                                            {{ $contact->email }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h6 class="mb-0">Teswiriň temasy</h6>
                                        </div>
                                        <div class="col-lg-8 text-secondary">
                                            {{ $contact->subject }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row align-content-center">
                                        <div class="col-lg-4">
                                            <h6 class="mb-0">Teswiriň soragy</h6>
                                        </div>
                                        <div class="col-lg-8 text-secondary">
                                            {{ $contact->comment }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h6 class="mb-0">Ugradylan wagty</h6>
                                        </div>
                                        <div class="col-lg-8 text-secondary">
                                            {{ $contact->created_at }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>



                    <!-- <div class="h4">
                        Teswirler
                    </div>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Ady</th>
                                <th scope="col">E-mail</th>
                                <th scope="col" width="50%">Soragy</th>
                                <th scope="col">Ugradylan wagty</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $contact)
                            <tr>
                                <th scope="row">{{ $contact->id }}</th>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->comment }}</td>
                                <td>{{ $contact->created_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table> -->
                </div>
            </section>
        </div>
    </div>

    @include('app.script')
    <script src="{{ asset('js/admin.js') }}"></script>
</body>

</html>