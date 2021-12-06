<!DOCTYPE html>
<html lang="">

<head>
    <title>ThreeMain Show</title>

    @include('app.meta')
</head>

<body style="background: #f6f2ef">

    @include('app.navbar')


    <section class="banner-img-show"></section>

    <div class="container my-5 py-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div id="circle" style="width: 100%; border: 3px solid white; border-radius: 20px;"></div>
            </div>
            <div class="col-lg-6">
                <div class="display-4">Header</div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate vero est, saepe ex possimus quidem consectetur eius excepturi odit maiores labore repellendus inventore quia perspiciatis officia porro eligendi velit amet!
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut eos, asperiores aliquam eligendi amet necessitatibus. 
                    <br><br>
                    Quod sed enim nam ad delectus? Necessitatibus optio recusandae, quae illo fuga numquam voluptatum! Possimus!
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis pariatur facilis quam qui iure voluptatum ut necessitatibus, temporibus, unde ratione, aperiam veniam nemo ex id corrupti itaque quo? Quia, nulla.   
                    <br><br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate vero est, saepe ex possimus quidem consectetur eius excepturi odit maiores labore repellendus inventore quia perspiciatis officia porro eligendi velit amet!
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut eos, asperiores aliquam eligendi amet necessitatibus. Quod sed enim nam ad delectus? Necessitatibus optio recusandae, quae illo fuga numquam voluptatum! Possimus!
                </p>
            </div>
        </div>
    </div>









    <script type="text/javascript" src="{{ asset('js/loader.js') }}"></script>

    <script type="text/javascript">
        var data;
        var chart;
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            // Create our data table.
            data = new google.visualization.DataTable();
            data.addColumn('string', 'Topping');
            data.addColumn('number', 'Slices');
            data.addRows([
                ['2021', 3],
                ['2020', 2],
                ['2019', 1.5],
                ['2018', 1],
                ['2017', 1],
                ['2016', 1],
                ['2015', 1],
                ['2014', 1],
                ['2013', 1],
                ['2012', 1],
                ['2011', 1],
                ['2010', 0.1]
            ]);

            // Set chart options
            var options = {
                'title': 'Ýurdumyzdaky agaçlaryň her ýyla görä üýtgeýşi',
                'width': 500,
                'height': 450,
                'backgroundColor': '#f6f2ef',
            };

            // Instantiate and draw our chart, passing in some options.
            chart = new google.visualization.PieChart(document.getElementById('circle'));
            google.visualization.events.addListener(chart, 'select', selectHandler);
            chart.draw(data, options);
        }

        function selectHandler() {
            var selectedItem = chart.getSelection()[0];
            var value = data.getValue(selectedItem.row, 0);
            alert('The user selected ' + value);
        }
    </script>
    @include('app.footer')
    @include('app.script')
</body>

</html>