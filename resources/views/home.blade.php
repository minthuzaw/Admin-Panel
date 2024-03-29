@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <x-example.card/>

        <div class="row">
            <div class="col-md-6 col-12 my-1">
                <x-example.button/>
            </div>

            <div class="col-md-6 col-12 my-1">
                <x-example.table-sm/>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-12 my-1">
                <x-example.table-bordered/>
            </div>

            <div class="col-md-6 col-12 my-1">
                <div class="card shadow-lg">
                    <div class="card-body p-1">
                        <div>
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12 col-12 my-1">
                <div class="card shadow-lg">
                    <div class="card-body p-0">
                        <div>
                            <div id="chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Date of birth</label>
                            <input type="text" class="form-control start" id="start_date" placeholder="Date"
                                   name="start">
                        </div>

                    </div>
                </div>
            </div>
        </div>

        {{--            <div class="col-md-3 col-12 col-xl-3">--}}
        {{--                <div class="card p-3 shadow-lg" style="border-radius: 50px !important;">--}}
        {{--                    <div class="card-body text-center">--}}
        {{--                        <img src="https://beautifull.netlify.app/images/wheat.webp" width="100" height="100" class="rounded-5" alt="">--}}

        {{--                        <h5 class="fw-semibold my-4">Wheat</h5>--}}

        {{--                        <p class="text-center text-muted px-2 m-0">Our wheat is of high quality by planting organically without chemical fertilizers. Our wheat is high in fiber and carbohydrates.</p>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
    </div>

    </div>
@endsection
@push('script')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <script>
        $(document).ready(function () {
            console.log('test')
            $('.start').datepicker({format: 'dd-mm-yyyy',});
        })
    </script>
    {{--chart.js--}}
    <script>
        const labels = [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
            'July',
            'August',
            'September',
            'October',
            'November',
            'December'
        ];

        const data = {
            labels: labels,
            datasets: [{
                label: 'Dataset',
                backgroundColor: 'rgb(67,172,172)',
                borderColor: 'rgb(67,172,172)',
                data: [0, 10, 15, 30, 20, 35, 45, 40, 20, 15, 10, 0],
                fill: {
                    target: 'origin',
                    above: 'rgb(67,172,172)'
                },
                // pointRadius: 0,
            }]
        };

        const config = {
            type: 'line',
            data: data,
            options: {
                elements: {
                    line: {
                        tension: 0.2,
                        // borderJoinStyle: 'round',
                    }
                },
                plugins: {
                    legend: {
                        display: true,
                        labels: {
                            color: 'rgb(67,172,172)',
                        }
                    },
                    // title: {
                    //     display: true,
                    //     text: 'Chart Title',
                    //     align: 'start',
                    //     color: '#a7a3a3'
                    // },

                }
            }
        };
        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>

    {{--End chart.js--}}

    {{--Apexchart.js--}}
    <script>
        var options = {
            series: [
                {
                    name: 'series1',
                    data: [31, 40, 28, 51, 42, 109, 100]
                },
                {
                    name: 'series2',
                    data: [11, 32, 45, 32, 34, 52, 41]
                }
            ],
            chart: {
                height: 350,
                type: 'area'
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth'
            },
            xaxis: {
                type: 'datetime',
                categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
            },
            tooltip: {
                x: {
                    format: 'dd/MM/yy HH:mm'
                },
            },
            responsive: [{
                breakpoint: undefined,
                options: {},
            }],
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>
    {{--End Apexchart.js--}}
@endpush
