@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-md-7">
            <div class="widget widget-fullwidth user-develop-chart">
                <div class="widget-head">
                    <div class="tools"><span class="icon s7-cloud-download"></span><span class="icon s7-refresh-2"></span></div><span class="title">Development Activity</span>
                </div>
                <div class="widget-chart-container">
                    <div id="develop-chart-legend" class="legend-container"><table style="font-size:smaller;color:#545454"><tbody><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(44,193,133);overflow:hidden"></div></div></td><td class="legendLabel">Purchases</td><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(38,225,150);overflow:hidden"></div></div></td><td class="legendLabel">Plans</td><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(67,246,174);overflow:hidden"></div></div></td><td class="legendLabel">Services</td></tr></tbody></table></div>
                    <div id="develop-chart" style="height: 225px; padding: 0px; position: relative;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 652.5px; height: 225px;" width="1305" height="450"></canvas><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 652.5px; height: 225px;" width="1305" height="450"></canvas></div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="widget-indicators">
                <div class="indicator-item">
                    <div class="indicator-item-icon">
                        <div class="icon"><span class="s7-graph1"></span></div>
                    </div>
                    <div class="indicator-item-value"><span data-toggle="counter" data-end="36" class="indicator-value-counter">36</span>
                        <div class="indicator-value-title">Today's Orders</div>
                    </div>
                </div>
                <div class="indicator-item">
                    <div class="indicator-item-icon">
                        <div class="icon"><span class="s7-graph"></span></div>
                    </div>
                    <div class="indicator-item-value"><span data-toggle="counter" data-end="157" class="indicator-value-counter">157</span>
                        <div class="indicator-value-title">Support Tickets</div>
                    </div>
                </div>
                <div class="indicator-item">
                    <div class="indicator-item-icon">
                        <div class="icon"><span class="s7-graph3"></span></div>
                    </div>
                    <div class="indicator-item-value"><span data-toggle="counter" data-decimals="1" data-end="17.9" class="indicator-value-counter">17.9</span>
                        <div class="indicator-value-title">Download Files</div>
                    </div>
                </div>
                <div class="indicator-item">
                    <div class="indicator-item-icon">
                        <div class="icon"><span class="s7-cart"></span></div>
                    </div>
                    <div class="indicator-item-value"><span data-toggle="counter" data-decimals="2" data-end="78,450" data-prefix="$" class="indicator-value-counter">$78,450.00</span>
                        <div class="indicator-value-title">Total Purchases</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="project-list">
                <div class="project-list-title">Статистика работника: {{ $worker->email }}</div>
                <div class="project-item">
                    <div class="project-item-title"><span class="name">Product Design</span><span class="description">Create the new product design</span></div>
                    <div class="project-item-user">
                        <div class="user-avatar"><img src="assets/img/avatar.jpg" alt="avatar"></div>
                        <div class="user-info"><span class="name">Marsha Hogan</span><span class="position description">Product designer</span></div>
                    </div>
                    <div class="project-item-state"><span class="name">In Progress</span><span class="description">3D modeling</span></div>
                    <div class="project-item-date"><span class="date">May 6, 2017</span><span class="time description">8:30</span></div>
                    <div class="project-item-progress"><span class="description">50%</span>
                        <div class="progress">
                            <div style="width: 50%" class="progress-bar progress-bar-primary"></div>
                        </div>
                    </div>
                    <div class="project-item-actions"><span class="icon s7-refresh-2"></span><span class="icon s7-close"></span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="project-list-title">Статистика работника: {{ $worker->email }}</div>

    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="widget widget-tile">
                <div id="spark1" class="chart sparkline"><canvas style="display: inline-block; width: 85px; height: 35px; vertical-align: top;" width="85" height="35"></canvas></div>
                <div class="data-info">
                    <div class="desc">New Users</div>
                    <div class="value"><span class="indicator indicator-equal s7-angle-right"></span><span class="number">113</span></div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget widget-tile">
                <div id="spark2" class="chart sparkline"><canvas style="display: inline-block; width: 81px; height: 35px; vertical-align: top;" width="81" height="35"></canvas></div>
                <div class="data-info">
                    <div class="desc">Monthly Sales</div>
                    <div class="value"><span class="indicator indicator-positive s7-angle-up"></span><span class="number">80%</span></div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget widget-tile">
                <div id="spark3" class="chart sparkline"><canvas style="display: inline-block; width: 85px; height: 35px; vertical-align: top;" width="85" height="35"></canvas></div>
                <div class="data-info">
                    <div class="desc">Impressions</div>
                    <div class="value"><span class="indicator indicator-positive s7-angle-up"></span><span class="number">532</span></div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget widget-tile">
                <div id="spark4" class="chart sparkline"><canvas style="display: inline-block; width: 85px; height: 35px; vertical-align: top;" width="85" height="35"></canvas></div>
                <div class="data-info">
                    <div class="desc">Downloads</div>
                    <div class="value"><span class="indicator indicator-negative s7-angle-down"></span><span class="number">113</span></div>
                </div>
            </div>
        </div>
    </div>

    <div class="project-list-title">Статистика работника: {{ $worker->email }}</div>

    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="widget widget-tile">
                <div id="spark1" class="chart sparkline"><canvas style="display: inline-block; width: 85px; height: 35px; vertical-align: top;" width="85" height="35"></canvas></div>
                <div class="data-info">
                    <div class="desc">New Users</div>
                    <div class="value"><span class="indicator indicator-equal s7-angle-right"></span><span class="number">113</span></div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget widget-tile">
                <div id="spark2" class="chart sparkline"><canvas style="display: inline-block; width: 81px; height: 35px; vertical-align: top;" width="81" height="35"></canvas></div>
                <div class="data-info">
                    <div class="desc">Monthly Sales</div>
                    <div class="value"><span class="indicator indicator-positive s7-angle-up"></span><span class="number">80%</span></div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget widget-tile">
                <div id="spark3" class="chart sparkline"><canvas style="display: inline-block; width: 85px; height: 35px; vertical-align: top;" width="85" height="35"></canvas></div>
                <div class="data-info">
                    <div class="desc">Impressions</div>
                    <div class="value"><span class="indicator indicator-positive s7-angle-up"></span><span class="number">532</span></div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget widget-tile">
                <div id="spark4" class="chart sparkline"><canvas style="display: inline-block; width: 85px; height: 35px; vertical-align: top;" width="85" height="35"></canvas></div>
                <div class="data-info">
                    <div class="desc">Downloads</div>
                    <div class="value"><span class="indicator indicator-negative s7-angle-down"></span><span class="number">113</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="project-list">
                <div class="project-list-title">Статистика работника: {{ $worker->email }}</div>
                <div class="project-item">
                    <div class="project-item-title"><span class="name">Product Design</span><span class="description">Create the new product design</span></div>
                    <div class="project-item-user">
                        <div class="user-avatar"><img src="assets/img/avatar.jpg" alt="avatar"></div>
                        <div class="user-info"><span class="name">Marsha Hogan</span><span class="position description">Product designer</span></div>
                    </div>
                    <div class="project-item-state"><span class="name">In Progress</span><span class="description">3D modeling</span></div>
                    <div class="project-item-date"><span class="date">May 6, 2017</span><span class="time description">8:30</span></div>
                    <div class="project-item-progress"><span class="description">50%</span>
                        <div class="progress">
                            <div style="width: 50%" class="progress-bar progress-bar-primary"></div>
                        </div>
                    </div>
                    <div class="project-item-actions"><span class="icon s7-refresh-2"></span><span class="icon s7-close"></span></div>
                </div>
            </div>
            <div class="project-list">
                <div class="project-item">
                    <div class="project-item-title"><span class="name">Product Design</span><span class="description">Create the new product design</span></div>
                    <div class="project-item-user">
                        <div class="user-avatar"><img src="assets/img/avatar.jpg" alt="avatar"></div>
                        <div class="user-info"><span class="name">Marsha Hogan</span><span class="position description">Product designer</span></div>
                    </div>
                    <div class="project-item-state"><span class="name">In Progress</span><span class="description">3D modeling</span></div>
                    <div class="project-item-date"><span class="date">May 6, 2017</span><span class="time description">8:30</span></div>
                    <div class="project-item-progress"><span class="description">50%</span>
                        <div class="progress">
                            <div style="width: 50%" class="progress-bar progress-bar-primary"></div>
                        </div>
                    </div>
                    <div class="project-item-actions"><span class="icon s7-refresh-2"></span><span class="icon s7-close"></span></div>
                </div>
            </div>
        </div>
    </div>


@endsection