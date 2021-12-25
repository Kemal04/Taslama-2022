<!DOCTYPE html>
<html lang="">

<head>
    <title>ThreeMain Show</title>

    @include('app.meta')
</head>

<body style="background: #f6f2ef">

    @include('app.navbar')


    <section class="about-banner"></section>

    <div class="container-fluid my-5 py-5 d-flex justify-content-center">
        <div class="w-75">
            <div class="row">

                <div class="col-lg-3 col-6">
                    <div class="rounded shadow d-block mb-3 position-relative bg-info text-white ">
                        <div class="inner p-2">
                            <h3>99931</h3>
                            <p>Ekilen agaçlar</p>
                        </div>
                        <div style="color: rgba(0,0,0,.15); z-index: 0;">
                            <i class="fas fa-shopping-bag display-3 position-absolute" style="top: 20px; right: 15px;"></i>
                        </div>
                        <a href="#" class="d-block py-1 position-relative text-center text-decoration-none text-white" style="background: rgba(0,0,0,.1); z-index: 10;">Doly oka <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="rounded shadow d-block mb-3 position-relative bg-warning text-white ">
                        <div class="inner p-2">
                            <h3>342331</h3>
                            <p>Indi ekilmeli</p>
                        </div>
                        <div style="color: rgba(0,0,0,.15); z-index: 0;">
                            <i class="fas fa-shopping-bag display-3 position-absolute" style="top: 20px; right: 15px;"></i>
                        </div>
                        <a href="#" class="d-block py-1 position-relative text-center text-decoration-none text-white" style="background: rgba(0,0,0,.1); z-index: 10;">Doly oka <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="rounded shadow d-block mb-3 position-relative bg-success text-white ">
                        <div class="inner p-2">
                            <h3>150</h3>
                            <p>New Orders</p>
                        </div>
                        <div style="color: rgba(0,0,0,.15); z-index: 0;">
                            <i class="fas fa-shopping-bag display-3 position-absolute" style="top: 20px; right: 15px;"></i>
                        </div>
                        <a href="#" class="d-block py-1 position-relative text-center text-decoration-none text-white" style="background: rgba(0,0,0,.1); z-index: 10;">Doly oka <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="rounded shadow d-block mb-3 position-relative bg-danger text-white ">
                        <div class="inner p-2">
                            <h3>150</h3>
                            <p>New Orders</p>
                        </div>
                        <div style="color: rgba(0,0,0,.15); z-index: 0;">
                            <i class="fas fa-shopping-bag display-3 position-absolute" style="top: 20px; right: 15px;"></i>
                        </div>
                        <a href="#" class="d-block py-1 position-relative text-center text-decoration-none text-white" style="background: rgba(0,0,0,.1); z-index: 10;">Doly oka <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container my-5 py-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div id="columnchart_material" class="" style="width: 100%; height: 300px;"></div>
            </div>
            <div class="col-lg-6 text-center d-flex justify-content-end">
                <div class="w-75">
                    <div class="h3">Howanyň we agaçlaryň Statistikasy</div>
                    <p class="text-secondary">
                        Türkmenistanda adatdaky bolşy ýaly her ýylda nobatdaky agaç ekme dabarasy geçirilýär we ýurdumyzda agaçlaryň sany her ýyl köpelýär.
                    </p>
                </div>
            </div>
        </div>
    </div>



    <script type="text/javascript" src="{{ asset('js/loader.js') }}"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['bar']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Year', 'Agac sanlary', 'howanyn hapalygy', 'arassa howwa'],
                ['2014', 1000, 400, 200],
                ['2015', 1170, 460, 250],
                ['2016', 660, 1120, 300],
                ['2017', 1030, 540, 350]
            ]);

            var options = {
                chart: {},
                backgroundColor: '#f6f2ef'
            };

            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
    </script>
    @include('app.footer')
    @include('app.script')
</body>

</html>