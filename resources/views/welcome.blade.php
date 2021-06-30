<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Poulayer</title>
    <style>

        body {

            height: 100vh;

            min-height: 500px;

            background-image: url({{ asset('poule.jpeg') }});

            background-size: cover;

            background-position: center;

            background-repeat: no-repeat;
            background-attachment: fixed;

        }

    </style>
</head>
<body>
<div class="container">
    <div class="container">

        <div class="row">

            <div class="col-sm-10 col-md-10 col-lg-10 col-12 mx-auto">

                <div class="card-body shadow-lg p-3 my-5 bg-white rounded">



                    <p class="text-center">
                        <h4>Lots de réproduction en details</h4>
                        <img src="{{ asset('images/ADEX_Transp_Blanc.png') }}" alt="" width="30%" class="img img-fluid">

                    </p>

                    {!! Form::open(['route' => 'poulayers.store']) !!}

                    @include('flash::message')
                    <div class="row">
                        @include('poulayers.fields')

                    </div>

                    {!! Form::close() !!}

                </div>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
