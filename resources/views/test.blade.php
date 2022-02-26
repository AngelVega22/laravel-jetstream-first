<html>

<body>
    <h1>Hola, {{ $nombre }}</h1>

    <div class="bg-orange-700">
        <h1>
            @php
                echo 'Esto es la vista 1';
            @endphp
        </h1>
        <br>
        <h1>El nombre de usuario es: <strong>{{ $nombre }}</strong></h1>
    </div>


</body>

</html>
