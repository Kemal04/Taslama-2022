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
            <div class="container pt-5">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="h4">Ulanyjylar</div>
                    <a href="" class="h5 ml-auto pr-3"><i class="fas fa-user-plus"></i></a>
                </div>
                <table class="table table-bordered mt-5 bg-white">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Ady</th>
                            <th scope="col">Familýasy</th>
                            <th scope="col">Elektron poçtasy</th>
                            <th scope="col">Telefon belgisi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->surename }}</td>
                            <td>{{ $user->email }}</td>
                            <td>+993 {{ $user->phone_number }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('app.script')
    <script src="{{ asset('js/admin.js') }}"></script>
</body>

</html>