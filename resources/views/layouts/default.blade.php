<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Loan Processing Module (admin)">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Enterprise WebApp</title>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700|Open+Sans+Condensed:300,700">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bs-theme-slate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sidr.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="top">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser.
    Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="container-fluid">

{{--@include('shared.navigation')--}}

@include('shared.header')

    <!-- content -->
    <div class="animated fadeIn" style="padding: 0 0 0 150px;">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                @yield('content')
            </div>
            <div class="col-sm-10 col-sm-offset-1 text-right padding">
                @include('shared.top-of-page')
            </div>
        </div>
    </div>
    <!-- .content -->

    @if (View::hasSection('footer'))
        @yield('footer')
    @else
        @include('shared.footer')
    @endif

</div><!-- .container-fluid -->

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/jquery.sidr.min.js') }}"></script>
<script src="{{ asset('js/jquery.nicescroll.min_3.6.8.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

<!-- ChartJs -->
<script src="{{ asset('js/plugins/chartJs/Chart.min.js') }}"></script>

<!-- Flot -->
<script src="{{ asset('js/plugins/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('js/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ asset('js/plugins/flot/jquery.flot.spline.js') }}"></script>
<script src="{{ asset('js/plugins/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('js/plugins/flot/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('js/plugins/flot/jquery.flot.symbol.js') }}"></script>
<script src="{{ asset('js/plugins/flot/jquery.flot.time.js') }}"></script>

<!-- Morris -->

<!-- Peity -->

<!-- Custom and plugin javascript -->
<script src="{{ asset('js/plugins/inspinia.js') }}"></script>
<script src="{{ asset('js/plugins/pace/pace.min.js') }}"></script>

<!-- Sparkline -->
<script src="{{ asset('js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>

<script>
    $(document).ready(function() {

        //var currentUrl = window.location.href;
        //alert(currentUrl);

        // sidr - left side main menu
        //$('.sideMainMenuButton').sidr();

        // esc key closes sidr menu too!
//        $(document).keyup(function (e) {
//            if (e.keyCode == 27) { // escape key maps to keycode `27`
//                $('.sideMainMenuButton').click().sidr();
//            }
//        });

        var sparklineCharts = function(){
            $("#sparkline1").sparkline([34, 43, 43, 35, 44, 32, 44, 52], {
                type: 'line',
                width: '100%',
                height: '50',
                lineColor: '#0099ff',
                spotColor: '#999999',
                minSpotColor: '#ff0000',
                maxSpotColor: '#00ff00',
                fillColor: "transparent"
            });

            $("#sparkline2").sparkline([32, 11, 25, 37, 41, 32, 34, 42], {
                type: 'line',
                width: '100%',
                height: '50',
                lineColor: '#0099ff',
                spotColor: '#999999',
                minSpotColor: '#ff0000',
                maxSpotColor: '#00ff00',
                fillColor: "transparent"
            });

            $("#sparkline3").sparkline([1000, 500, 950, 37, 41, 400, 230, 42], {
                type: 'line',
                width: '100%',
                height: '50',
                lineColor: '#0099ff',
                spotColor: '#999999',
                minSpotColor: '#ff0000',
                maxSpotColor: '#00ff00',
                fillColor: "transparent"
            });

        };

        var sparkResize;

        $(window).resize(function(e) {
            clearTimeout(sparkResize);
            sparkResize = setTimeout(sparklineCharts, 500);
        });

        sparklineCharts();

        var data1 = [
            [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,20],[11,10],[12,13],[13,4],[14,7],[15,8],[16,12]
        ];
        var data2 = [
            [0,0],[1,2],[2,7],[3,4],[4,11],[5,4],[6,2],[7,5],[8,11],[9,5],[10,4],[11,1],[12,5],[13,2],[14,5],[15,2],[16,0]
        ];
        $("#flot-dashboard5-chart").length && $.plot($("#flot-dashboard5-chart"), [
                data1,  data2
            ],
            {
                series: {
                    lines: {
                        show: false,
                        fill: true
                    },
                    splines: {
                        show: true,
                        tension: 0.4,
                        lineWidth: 1,
                        fill: 0.4
                    },
                    points: {
                        radius: 0,
                        show: true
                    },
                    shadowSize: 2
                },
                grid: {
                    hoverable: true,
                    clickable: true,

                    borderWidth: 2,
                    color: 'transparent'
                },
                colors: ["#003366", "#0099ff"],
                xaxis:{
                },
                yaxis: {
                },
                tooltip: false
            }
        );

        var SalesExpensesData = {
            labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            datasets: [
                {
                    label: "Revenue",
                    fillColor: "rgba(102,153,102,0.25)",
                    strokeColor: "rgba(102,153,102,1)",
                    pointColor: "rgba(102,153,102,1)",
                    pointStrokeColor: "#696",
                    pointHighlightFill: "#696",
                    pointHighlightStroke: "rgba(102,153,102,1)",
                    data: [0, 16, 8, 28, 34, 23, 52, 44, 30, 34, 19, 54]
                },
                {
                    label: "Expenses",
                    fillColor: "rgba(153,102,102,0.25)",
                    strokeColor: "rgba(153,102,102,1)",
                    pointColor: "rgba(153,102,102,1)",
                    pointStrokeColor: "#966",
                    pointHighlightFill: "#966",
                    pointHighlightStroke: "rgba(153,102,102,1)",
                    data: [0, 10, 20, 5, 15, 30, 40, 25, 35, 42, 37, 20]
                }
            ]
        };

        var YearOverYearData = {
            labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            datasets: [
                {
                    label: "Sales 2015",
                    fillColor: "rgba(68,85,102,0.25)",
                    strokeColor: "rgba(68,85,102,1)",
                    pointColor: "rgba(68,85,102,1)",
                    pointStrokeColor: "#456",
                    pointHighlightFill: "#456",
                    pointHighlightStroke: "rgba(68,85,102,1)",
                    data: [0, 16, 8, 28, 34, 23, 52, 44, 30, 34, 19, 54]
                },
                {
                    label: "Sales 2016",
                    fillColor: "rgba(0,153,255,0.25)",
                    strokeColor: "rgba(0,153,255,1)",
                    pointColor: "rgba(0,153,255,1)",
                    pointStrokeColor: "#09f",
                    pointHighlightFill: "#09f",
                    pointHighlightStroke: "rgba(0,153,255,1)",
                    data: [0, 10, 20, 5, 15, 30, 40, 25, 35, 42, 37, 20]
                }
            ]
        };

        var lineOptions = {
            scaleShowGridLines: true,
            scaleGridLineColor: "rgba(96,96,96,0.25)",
            scaleGridLineWidth: 1,
            bezierCurve: true,
            bezierCurveTension: 0.5,
            pointDot: true,
            pointDotRadius: 3,
            pointDotStrokeWidth: 1,
            pointHitDetectionRadius: 20,
            datasetStroke: true,
            datasetStrokeWidth: 2,
            datasetFill: true,
            responsive: true,
            multiTooltipTemplate: "<%= datasetLabel %> - <%= value %>",
        };
        var ctx = document.getElementById("SalesChart").getContext("2d");
        var RevenueAndExpenses = new Chart(ctx).Line(SalesExpensesData, lineOptions);
        var ctx = document.getElementById("YearOverYear").getContext("2d");
        var YearOverYear = new Chart(ctx).Line(YearOverYearData, lineOptions);
    });
</script>

</body>
</html>
