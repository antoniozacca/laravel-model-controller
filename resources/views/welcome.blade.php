<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Model Controller</title>
    @vite('resources/js/app.js')
</head>

<body>
    <h1 class="text-center">Film Disponibili</h1>
    <div class="container mt-5">
        <div class="row">
            @foreach ($Movies as $Movie)
                <div class="col-md-6 col-xs-12 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $Movie->title }} <small class="text-muted">({{ $Movie->original_title }})</small></h5>
                            <p class="card-text"><strong>Nazionalità:</strong> {{ $Movie->nationality }}</p>
                            <p class="card-text"><strong>Data di pubblicazione:</strong> {{ $Movie->date }}</p>
                            <p class="card-text"><strong>Voto:</strong> {{ $Movie->vote }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>