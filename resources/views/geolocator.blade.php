<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geolocalizador</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { margin-bottom: 20px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input { padding: 8px; width: 100%; margin-bottom: 10px; }
        button { padding: 10px 15px; background-color: #007BFF; color: #fff; border: none; cursor: pointer; }
        button:hover { background-color: #0056b3; }
        .results { margin-top: 20px; }
        .error { color: red; font-weight: bold; }
    </style>
</head>
<body>
    <h1>Geolocalizador</h1>

    <form method="POST" action="{{ route('geolocator.coordinates') }}">
        @csrf
        <h3>Converter Endereço em Coordenadas</h3>
        <label for="address">Endereço:</label>
        <input type="text" name="address" id="address" placeholder="Digite um endereço" required>
        <button type="submit">Buscar Coordenadas</button>
    </form>

    @if (session('error'))
        <div class="error">
            {{ session('error') }}
        </div>
    @endif

    @if (session('coordinates'))
        <div class="results">
            <h3>Resultado:</h3>
            <p><strong>Endereço:</strong> {{ session('coordinates')['address'] }}</p>
            <p><strong>Latitude:</strong> {{ session('coordinates')['latitude'] }}</p>
            <p><strong>Longitude:</strong> {{ session('coordinates')['longitude'] }}</p>
        </div>
    @endif

    <hr>

    <form method="POST" action="{{ route('geolocator.distance') }}">
        @csrf
        <h3>Calcular Distância Entre Dois Pontos</h3>
        <label for="lat1">Latitude Ponto 1:</label>
        <input type="text" name="lat1" id="lat1" placeholder="Ex: -23.550520" required>

        <label for="lng1">Longitude Ponto 1:</label>
        <input type="text" name="lng1" id="lng1" placeholder="Ex: -46.633308" required>

        <label for="lat2">Latitude Ponto 2:</label>
        <input type="text" name="lat2" id="lat2" placeholder="Ex: -22.906847" required>

        <label for="lng2">Longitude Ponto 2:</label>
        <input type="text" name="lng2" id="lng2" placeholder="Ex: -43.172897" required>

        <button type="submit">Calcular Distância</button>
    </form>

    @if (session('distance'))
        <div class="results">
            <h3>Resultado:</h3>
            <p><strong>Distância:</strong> {{ session('distance') }} km</p>
        </div>
    @endif
</body>
</html>
