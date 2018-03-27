@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-md-7">
            <div class="widget widget-fullwidth user-develop-chart">
                <div class="widget-head">
                    <div class="tools"><span class="icon s7-cloud-download"></span><span class="icon s7-refresh-2"></span></div><span class="title">Development Activity</span>
                </div>
                <div class="widget-chart-container">
                    <div id="develop-chart-legend" class="legend-container"></div>
                    <div id="develop-chart" style="height: 225px;"></div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="widget-indicators">
                <div class="indicator-item">
                    <div class="indicator-item-icon">
                        <div class="icon"><span class="s7-graph1"></span></div>
                    </div>
                    <div class="indicator-item-value"><span data-toggle="counter" data-end="36" class="indicator-value-counter">0</span>
                        <div class="indicator-value-title">Today's Orders</div>
                    </div>
                </div>
                <div class="indicator-item">
                    <div class="indicator-item-icon">
                        <div class="icon"><span class="s7-graph"></span></div>
                    </div>
                    <div class="indicator-item-value"><span data-toggle="counter" data-end="157" class="indicator-value-counter">0</span>
                        <div class="indicator-value-title">Support Tickets</div>
                    </div>
                </div>
                <div class="indicator-item">
                    <div class="indicator-item-icon">
                        <div class="icon"><span class="s7-graph3"></span></div>
                    </div>
                    <div class="indicator-item-value"><span data-toggle="counter" data-decimals="1" data-end="17.9" class="indicator-value-counter">0</span>
                        <div class="indicator-value-title">Download Files</div>
                    </div>
                </div>
                <div class="indicator-item">
                    <div class="indicator-item-icon">
                        <div class="icon"><span class="s7-cart"></span></div>
                    </div>
                    <div class="indicator-item-value"><span data-toggle="counter" data-decimals="2" data-end="78,450" data-prefix="$" class="indicator-value-counter">0</span>
                        <div class="indicator-value-title">Total Purchases</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default panel-table">
                <div class="panel-heading">Работники
                    <div class="tools"><span class="icon s7-cloud-download"></span><span class="icon s7-edit"></span></div>
                </div>
                <div class="panel-body">
                    <table id="table1" class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Country</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>info</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($workers as $worker)
                        <tr class="odd gradeX">
                            <td>{{ $worker->id }}</td>
                            <td>{{ $worker->country }}</td>
                            <td>{{ $worker->name }}</td>
                            <td>{{ $worker->email }}</td>
                            <td><a href="{{ route('workers.show', $worker) }}">more</a> </td>

                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection