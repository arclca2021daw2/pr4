<html>
<head>
    <title>Usuaris</title>
</head>

<body>
    <table>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nom</th>
            <th scope="col">Cognoms</th>
            <th scope="col">Correu</th>
        </tr>
        @foreach ($usuaris as $usuari)
            <tr>
                <td>{{$usuari->id}}</td>
                <td>{{$usuari->nom}}</td>
                <td>{{$usuari->cognoms}}</td>
                <td>{{$usuari->correu}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>