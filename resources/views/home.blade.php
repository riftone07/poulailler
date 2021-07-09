@extends('layouts.app')

@section('css')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Type', 'Nombre'],
                ['Mortalite male',     {{ $poulayers->sum('mortalite_male') }}],
                ['Mortalite femelle',     {{ $poulayers->sum('mortalite_femelle') }}],
            ]);

            var options = {
                title: 'Mortalité'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Type', 'Nombre'],
                ['Oeufs Mous',     {{ $poulayers->sum('mous') }}],
                ['Oeufs Cassés',     {{ $poulayers->sum('casses') }}],
                ['Oeufs Felés',     {{ $poulayers->sum('feles') }}],
                ['Oeufs Rugueux',     {{ $poulayers->sum('rugueux') }}],
                ['Oeufs Petits',     {{ $poulayers->sum('petits') }}],
                ['Oeufs Gros',     {{ $poulayers->sum('gros') }}],
                ['Oeufs Difformes',     {{ $poulayers->sum('difformes') }}],
                ['Oeufs De Couleur',     {{ $poulayers->sum('couleur') }}],
                ['Oeufs Gélés',     {{ $poulayers->sum('gel') }}],
            ]);

            var options = {
                title: 'Oeufs'
            };

            var chart = new google.visualization.PieChart(document.getElementById('oeufs'));

            chart.draw(data, options);
        }
    </script>
@endsection
@section('content')
  <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-value-lg">{{ $poulayers->sum('mortalite_male') }}</div>
                            <div>Mortalité Male</div>
                            <div class="progress progress-xs my-2">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-value-lg">{{ $poulayers->sum('mortalite_femelle') }}</div>
                            <div>Mortalité Femelle</div>
                            <div class="progress progress-xs my-2">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-value-lg">{{ $poulayers->sum('mortalite_totale') }}</div>
                            <div>Mortalité Totale</div>
                            <div class="progress progress-xs my-2">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-value-lg">{{ $poulayers->sum('ponte_totale') }}</div>
                            <div>Ponte Totale</div>
                            <div class="progress progress-xs my-2">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-value-lg">{{ $poulayers->sum('mous') }}</div>
                            <div>Œufs Mous</div>
                            <div class="progress progress-xs my-2">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-value-lg">{{ $poulayers->sum('casses') }}</div>
                            <div>Œufs Cassés</div>
                            <div class="progress progress-xs my-2">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-value-lg">{{ $poulayers->sum('feles') }}</div>
                            <div>Œufs Felés</div>
                            <div class="progress progress-xs my-2">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-value-lg">{{ $poulayers->sum('rugueux') }}</div>
                            <div>Œufs Rugueux</div>
                            <div class="progress progress-xs my-2">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-value-lg">{{ $poulayers->sum('gros') }}</div>
                            <div>Œufs Gros</div>
                            <div class="progress progress-xs my-2">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-value-lg">{{ $poulayers->sum('petits') }}</div>
                            <div>Œufs Petits</div>
                            <div class="progress progress-xs my-2">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-value-lg">{{ $poulayers->sum('difformes') }}</div>
                            <div>Œufs Difformés</div>
                            <div class="progress progress-xs my-2">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-value-lg">{{ $poulayers->sum('couleur') }}</div>
                            <div>Œufs De Couleur</div>
                            <div class="progress progress-xs my-2">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-value-lg">{{ $poulayers->sum('gel') }}</div>
                            <div>Œufs Gelés</div>
                            <div class="progress progress-xs my-2">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="piechart" style="width: 900px; height: 500px;"></div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="oeufs" style="width: 900px; height: 500px;"></div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

@endsection
