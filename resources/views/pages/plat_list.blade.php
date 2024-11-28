<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Plats</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Liste des Plats</h2>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nom plat</th>
                    <th>Categorie</th>
                    <th>Prix</th>
                    <th>Rate</th>
                    <th>Temps pour livrer</th>
                    <th>Diatry</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($plats as $plat)
                    <tr>
                         <td>{{$plat->nom_plat}}</td>
                         <td>{{$plat->categorie}}</td>
                         <td>{{$plat->prix}}</td>
                         <td>{{$plat->rate}}</td>
                         <td>{{$plat->delivery}}</td>
                         <td>{{$plat->diatry}}</td>
                        <td>
                            <a href="{{ route('plat_edit', $plat->id_plat) }}" class="btn btn-warning btn-sm">Modifier</a>
                            <form action="{{ route('plat_dest', $plat->id_plat) }}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Voulez-vous vraiment supprimer ce plat?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
