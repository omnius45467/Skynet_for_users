@extends('backend')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Dashboard</h2>
            </div>
        </div>
    </div>
    @if(Auth::user()->hasRole('admin'))
    <div id="container"></div>
    <script>
        $(function () {

            $.getJSON('http://www.highcharts.com/samples/data/jsonp.php?filename=aapl-c.json&callback=?', function (data) {
                // Create the chart
                $('#container').highcharts('StockChart', {


                    rangeSelector : {
                        selected : 1
                    },

                    title : {
                        text : 'AAPL Stock Price'
                    },

                    series : [{
                        name : 'AAPL',
                        data : data,
                        tooltip: {
                            valueDecimals: 2
                        }
                    }]
                });
            });

        });
    </script>
        @else
        <h4>You are non admin</h4>
    @endif
@endsection