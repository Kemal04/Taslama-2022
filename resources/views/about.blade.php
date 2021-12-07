<!DOCTYPE html>
<html lang="">

<head>
    @include ('app.meta')

    <title>27-nji Mekdep</title>
</head>

<body style="background-color: #f5f0e9; font-size: 14px;">

    @include ('app.navbar')

    <section class="banner">
        <div class="container-fluid" style="width: 85%;">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-4 text-white">
                    <div data-aos="fade-left"><small style="letter-spacing: 2px; font-weight: 700;">Welcome to Byfaith church</small></div>
                    <div class="my-4">
                        <h1 data-aos="fade-left" class="font-weight-bold">Oh Safe To the Rock That Is Higher Than I</h1>
                    </div>
                    <div class="w-75">
                        <p class="mb-5" data-aos="fade-left" data-aos-delay="200">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p data-aos="fade-left" data-aos-delay="300" class=""><a href="#" class="btn btn-green">Go to sermons</a></p>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-left">
                    <img src="{{ asset('img/cards/banner-card.webp') }}" class="img-fluid w-75">
                </div>
            </div>
        </div>
    </section>


    <div class="container my-5 py-5">
        <div class="row">
            <div class="col-lg-12 mb-5 text-center" data-aos="fade-up">
                <span class="mb-4 d-block text-green font-weight-bold">Sermons</span>
                <h2 class="mb-4 font-weight-bold">Recent Sermons</h2>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                <div class="card border-0 mr-4" style="background-color: transparent;">
                    <img src="{{ asset('img/cards/statik.jpg') }}" class="img-fluid">
                    <div class="card-body p-0 my-3">
                        <span class="text-secondary mb-2 d-block">15 Jan 2020 <span class="mx-2">•</span> By Pastor Campbell </span>
                        <div class="my-3 h5">Statik</div>
                        <p class="mb-3 text-secondary">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi et, voluptatum veritatis nemo sapiente nostrum delectus, </p>
                        <a href="{{ route('about.statik') }}" class="btn btn-green">More Information</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                <div class="card border-0 mr-4" style="background-color: transparent;">
                    <img src="{{ asset('img/cards/world.jpg') }}" class="img-fluid">
                    <div class="card-body p-0 my-3">
                        <span class="text-secondary mb-2 d-block">15 Jan 2020 <span class="mx-2">•</span> By Pastor Campbell </span>
                        <div class="my-3 h5">Statik</div>
                        <p class="mb-3 text-secondary">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi et, voluptatum veritatis nemo sapiente nostrum delectus, </p>
                        <a href="{{ route('about.statik') }}" class="btn btn-green">More Information</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                <div class="card border-0 mr-4" style="background-color: transparent;">
                    <img src="{{ asset('img/cards/TKM.png') }}" class="img-fluid">
                    <div class="card-body p-0 my-3">
                        <span class="text-secondary mb-2 d-block">15 Jan 2020 <span class="mx-2">•</span> By Pastor Campbell </span>
                        <div class="my-3 h5">Statik</div>
                        <p class="mb-3 text-secondary">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi et, voluptatum veritatis nemo sapiente nostrum delectus, </p>
                        <a href="{{ route('about.statik') }}" class="btn btn-green">More Information</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <section>
        <div class="container-fluid px-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6360365.127578056!2d55.02286416404438!3d38.88631666238773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f65cb5574bc6ccb%3A0x7edd826b4169a491!2sT%C3%BCrkmenistan!5e0!3m2!1str!2s!4v1637062056772!5m2!1str!2s" style="border: 1px; width: 100%; height: 500px" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section> -->

    
    <div id="geochart-colors" style="width: 700px; height: 433px;"></div>

    <section>
        <div class="container my-5 py-5">
            <div class="text-center">
                <div class="display-4">Header</div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt rerum soluta ut ipsum aperiam
                </p>
            </div>
            <div class="row no-gutters">
                @foreach($galleries->take(3) as $gallery)
                <div class="col-lg-4">

                    @foreach($galleries->take(3) as $gallery)
                    @if($loop->first)
                    <a href="{{ ($gallery->img) }}" data-fancybox="gallery">
                        <img src="{{ ($gallery->img) }}" class="img-fluid p-1">
                    </a>
                    @elseif($loop->last)
                    <a href="{{ ($gallery->img) }}" data-fancybox="gallery">
                        <img src="{{ ($gallery->img) }}" class="img-fluid p-1">
                    </a>
                    @else
                    <a href="{{ ($gallery->img) }}" data-fancybox="gallery">
                        <img src="{{ ($gallery->img) }}" class="img-fluid p-1">
                    </a>
                    @endif
                    @endforeach
                </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center mt-3">
                <a href="{{ route('gallery') }}" class="btn btn-outline-dark px-5" style="border-radius: 30px;">Gallery</a>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/loader.js') }}"></script>

    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['geochart'],
            // Note: Because this chart requires geocoding, you'll need mapsApiKey.
            // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
            'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
        });
        google.charts.setOnLoadCallback(drawRegionsMap);

        function drawRegionsMap() {
            var data = google.visualization.arrayToDataTable([
                ['Country', 'Latitude'],
                ['Algeria', 36],
                ['Angola', -8],
                ['Benin', 6],
                ['Botswana', -24],
                ['Burkina Faso', 12],
                ['Burundi', -3],
                ['Cameroon', 3],
                ['Canary Islands', 28],
                ['Cape Verde', 15],
                ['Central African Republic', 4],
                ['Ceuta', 35],
                ['Chad', 12],
                ['Comoros', -12],
                ['Cote d\'Ivoire', 6],
                ['Democratic Republic of the Congo', -3],
                ['Djibouti', 12],
                ['Egypt', 26],
                ['Equatorial Guinea', 3],
                ['Eritrea', 15],
                ['Ethiopia', 9],
                ['Gabon', 0],
                ['Gambia', 13],
                ['Ghana', 5],
                ['Guinea', 10],
                ['Guinea-Bissau', 12],
                ['Kenya', -1],
                ['Lesotho', -29],
                ['Liberia', 6],
                ['Libya', 32],
                ['Madagascar', null],
                ['Madeira', 33],
                ['Malawi', -14],
                ['Mali', 12],
                ['Mauritania', 18],
                ['Mauritius', -20],
                ['Mayotte', -13],
                ['Melilla', 35],
                ['Morocco', 32],
                ['Mozambique', -25],
                ['Namibia', -22],
                ['Niger', 14],
                ['Nigeria', 8],
                ['Republic of the Congo', -1],
                ['Réunion', -21],
                ['Rwanda', -2],
                ['Saint Helena', -16],
                ['São Tomé and Principe', 0],
                ['Senegal', 15],
                ['Seychelles', -5],
                ['Sierra Leone', 8],
                ['Somalia', 2],
                ['Sudan', 15],
                ['South Africa', -30],
                ['South Sudan', 5],
                ['Swaziland', -26],
                ['Tanzania', -6],
                ['Togo', 6],
                ['Tunisia', 34],
                ['Uganda', 1],
                ['Western Sahara', 25],
                ['Zambia', -15],
                ['Zimbabwe', -18]
            ]);

            var options = {
                region: '143', // Africa
                colorAxis: {
                    colors: ['#00853f', 'black', '#e31b23']
                },
                backgroundColor: '#81d4fa',
                datalessRegionColor: '#f8bbd0',
                defaultColor: '#f5f5f5',
            };

            var chart = new google.visualization.GeoChart(document.getElementById('geochart-colors'));
            chart.draw(data, options);
        };
    </script>

    @include ('app.footer')

    @include ('app.script')

</body>

</html>