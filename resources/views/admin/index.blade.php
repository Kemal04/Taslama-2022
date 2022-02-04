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
                    <div class="row my-2">
                        <div class="col-sm-12 text-center">
                            <h1 class="m-0 text-dark">Administrasiýa</h1>
                        </div>
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-info elevation-1 d-flex"><i class="fas fa-user"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Ulanyjylar</span>
                                    <span class="info-box-number">{{ auth()->user()->latest()->first()->id }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-danger elevation-1 d-flex"><i class="fas fa-walking"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Geçirilen çäreler</span>
                                    <span class="info-box-number">12</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-warning elevation-1 d-flex"><i class="fas fa-book"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Blog sany</span>
                                    <span class="info-box-number">112</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-green elevation-1 d-flex"><i class="fas fa-money-check-alt"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kömek pullar</span>
                                    <span class="info-box-number">10.0000<small>TMT</small></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Her ýylyň istatistikasy</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p class="text-center">
                                                <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                                            </p>
                                            <div class="chart">
                                                <canvas id="salesChart" height="360" style="height: 180px; display: block; width: 607px;" width="1214" class="chartjs-render-monitor"></canvas>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="text-center">
                                                <strong>Goal Completion</strong>
                                            </p>
                                            <div class="progress-group">
                                                Add Products to Cart
                                                <span class="float-right"><b>160</b>/200</span>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-primary" style="width: 80%"></div>
                                                </div>
                                            </div>
                                            <div class="progress-group">
                                                Complete Purchase
                                                <span class="float-right"><b>310</b>/400</span>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-danger" style="width: 75%"></div>
                                                </div>
                                            </div>
                                            <div class="progress-group">
                                                <span class="progress-text">Visit Premium Page</span>
                                                <span class="float-right"><b>480</b>/800</span>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-success" style="width: 60%"></div>
                                                </div>
                                            </div>
                                            <div class="progress-group">
                                                Send Inquiries
                                                <span class="float-right"><b>250</b>/500</span>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-warning" style="width: 50%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-sm-3 col-6">
                                            <div class="description-block border-right">
                                                <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                                                <h5 class="description-header">$35,210.43</h5>
                                                <span class="description-text">TOTAL REVENUE</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-6">
                                            <div class="description-block border-right">
                                                <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                                                <h5 class="description-header">$10,390.90</h5>
                                                <span class="description-text">TOTAL COST</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-6">
                                            <div class="description-block border-right">
                                                <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                                                <h5 class="description-header">$24,813.53</h5>
                                                <span class="description-text">TOTAL PROFIT</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-6">
                                            <div class="description-block">
                                                <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
                                                <h5 class="description-header">1200</h5>
                                                <span class="description-text">GOAL COMPLETIONS</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Ulanyjylar</h3>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="users-list clearfix">

                                        @foreach($users->take(8) as $user)
                                        <li>
                                            <img src="{{ asset('img/user.jpeg') }}" class="img-fluid w-50">
                                            <a class="users-list-name" href="#">{{ $user->name }}</a>
                                            <span class="users-list-date">{{ $user->surename }}</span>
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="{{ route('admin.user') }}">Bütün ulanyjylary görkez</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div id="main-slider" class="splide d-flex justify-content-center">
                                <div class="splide__track" style="width: 90%!important;">
                                    <ul class="splide__list">
                                        @foreach($contacts as $contact)

                                        <li class="splide__slide">
                                            <div class="card border" style="height: 258px!important;">
                                                <div class="card-body">
                                                    <div class="mt-3" style="font-size: 18px; font-weight: 700; line-height: 1.3;">{{ $contact->subject }}</div>
                                                    <p class="text-secondary mt-3">{{ $contact->comment }}</p>
                                                    <div class="d-flex align-items-center mt-5">
                                                        <img src="{{ asset('img/user.jpeg') }}" class="img-fluid rounded-circle" style="width: 10%;">
                                                        <div class="ml-3 text-danger">
                                                            <div class="" style="font-size: 18px; font-weight: 700; line-height: 1.3;">{{ $contact->name }}</div>
                                                            <div class="">{{ $contact->email }}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    @include('app.script')
    <script src="{{ asset('js/admin.js') }}"></script>
    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script>
        $(function() {

            'use strict'
            var salesChartCanvas = $('#salesChart').get(0).getContext('2d')

            var salesChartData = {
                labels: ['2015', '2016', '2017', '2018', '2019', '2020', '2021'],
                datasets: [{
                        label: 'Agaçlaryň köpelişi',
                        backgroundColor: 'rgba(53, 164, 98, 0.9)',
                        borderColor: 'rgba(53, 164, 98, 0.8)',
                        pointRadius: false,
                        pointColor: '#3b8bba',
                        pointStrokeColor: 'rgba(60,141,188,1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data: [20, 60, 30, 80, 70, 60, 100]
                        // Gok renk bolumi
                    },
                    {
                        label: 'Howanyň arassalanşy',
                        backgroundColor: 'rgba(7, 126, 253, 0.4)',
                        borderColor: 'rgba(7, 126, 253, 0.3)',
                        pointRadius: false,
                        pointColor: 'rgba(210, 214, 222, 1)',
                        pointStrokeColor: '#c1c7d1',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(220,220,220,1)',
                        data: [90, 93, 80, 76, 56, 55, 40]
                        // Gara renk bolumi
                    },
                    // {
                    //     label: 'Plany',
                    //     backgroundColor: 'rgba(0, 0, 0, 1)',
                    //     borderColor: 'rgba(7, 126, 253, 0.3)',
                    //     pointRadius: false,
                    //     pointColor: 'rgba(210, 214, 222, 1)',
                    //     pointStrokeColor: '#c1c7d1',
                    //     pointHighlightFill: '#fff',
                    //     pointHighlightStroke: 'rgba(220,220,220,1)',
                    //     data: [34, 5, 78, 76, 56, 55, 40]
                    //     // Gara renk bolumi
                    // },
                ]
            }

            var salesChartOptions = {
                maintainAspectRatio: false,
                responsive: true,
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            display: false,
                        }
                    }],
                    yAxes: [{
                        gridLines: {
                            display: false,
                        }
                    }]
                }
            }
            var salesChart = new Chart(salesChartCanvas, {
                type: 'line',
                data: salesChartData,
                options: salesChartOptions
            })
        })
    </script>
</body>

</html>