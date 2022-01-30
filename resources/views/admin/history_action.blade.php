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
                   
                </div>
            </section>
        </div>
    </div>
    
    @include('app.script')
    <script src="{{ asset('js/admin.js') }}"></script>
</body>

</html>