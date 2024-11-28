<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Chefs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Liste des Chefs</h2>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Cuisine</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($chefs as $chef)
                    <tr>
                        <td>{{ $chef->nom_chef }}</td>
                        <td>{{ $chef->cuisine }}</td>
                        <td>
                            <a href="{{ route('chef_edit', $chef->id_chef) }}" class="btn btn-warning btn-sm">Modifier</a>
                            <form action="{{ route('chef_destroy', $chef->id_chef) }}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Voulez-vous vraiment supprimer ce chef?')">Supprimer</button>
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
