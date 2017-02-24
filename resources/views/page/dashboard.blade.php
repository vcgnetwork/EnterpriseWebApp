@extends('layouts.default')
@section('content')

    <h3 class="header">// Welcome to the new @include('shared.system-name') //</h3>

    <p>Basic Layout and Instructions:</p>

    <p class="lead">Click the <i class="fa fa-fw fa-bars sideMainMenuButton"></i> icon in the top-left of the screen or use the escape key. To @include('shared.login-logout-text') @include('shared.system-name') - click the @include('shared.login-logout') icon in the top-right of the screen.</p>

    <div class="row">
        <div class="col-sm-4">

            <div class="row iblock">
                <div class="col-xs-12">
                    <h1><sup>$</sup>9,999,999</h1>
                    <p class="tiny">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <div id="sparkline1" class="padding"></div>
                </div>
                <div class="col-xs-6">
                    <small class="stats-label">Metric</small>
                    <h4>xxx</h4>
                </div>
                <div class="col-xs-6">
                    <small class="stats-label">Metric</small>
                    <h4>xxx</h4>
                </div>
            </div><!-- .row -->

        </div><!-- .col -->
        <div class="col-sm-4">

            <div class="row iblock">
                <div class="col-xs-12">
                    <h1><sup>$</sup>9,999,999</h1>
                    <p class="tiny">Lorem Ipsum is simply dummy text of the printing and` typesetting industry.</p>
                    <div id="sparkline2" class="padding"></div>
                </div>
                <div class="col-xs-6">
                    <small class="stats-label">Metric</small>
                    <h4>xxx</h4>
                </div>
                <div class="col-xs-6">
                    <small class="stats-label">Metric</small>
                    <h4>xxx</h4>
                </div>
            </div><!-- .row -->

        </div><!-- .col -->
        <div class="col-sm-4">

            <div class="row iblock">
                <div class="col-xs-12">
                    <h1><sup>$</sup>9,999,999</h1>
                    <p class="tiny">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <div id="sparkline3" class="padding"></div>
                </div>
                <div class="col-xs-6">
                    <small class="stats-label">Metric</small>
                    <h4>xxx</h4>
                </div>
                <div class="col-xs-6">
                    <small class="stats-label">Metric</small>
                    <h4>xxx</h4>
                </div>
            </div><!-- .row -->

        </div><!-- .col -->
    </div><!-- .row -->

    <p>&nbsp;</p>

    <div class="row">
        <div class="col-md-6 padding">
            Revenue vs Expenses Report
            <canvas id="SalesChart" height="100"></canvas>
        </div><!-- /col -->
        <div class="col-md-6 padding">
            Current Year-Over-Year Sales Report
            <canvas id="YearOverYear" height="100"></canvas>
        </div><!-- /col -->
    </div><!-- /row -->

@endsection
