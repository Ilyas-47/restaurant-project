<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Chef</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Modifier Chef</h2>
        <form action="{{ route('chef_update', $chef->id_chef) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nom_chef" class="form-label">Nom du Chef</label>
                <input type="text" class="form-control" id="nom_chef" name="nom_chef" value="{{ $chef->nom_chef }}" required>
            </div>
            <div class="mb-3"> 
                <label for="cuisine" class="form-label">Cuisine</label> 
                <select class="form-select" id="cuisine" name="cuisine" required> 
                    <option value="" disabled {{ !$chef->cuisine ? 'selected' : '' }}>Selectionner la cuisine</option> 
                    <option value="Moroccan" {{ $chef->cuisine == 'Moroccan' ? 'selected' : '' }}>Moroccan</option> 
                    <option value="Italien" {{ $chef->cuisine == 'Italien' ? 'selected' : '' }}>Italien</option> 
                    <option value="France" {{ $chef->cuisine == 'France' ? 'selected' : '' }}>France</option> 
                    <option value="Asian" {{ $chef->cuisine == 'Asian' ? 'selected' : '' }}>Asian</option> 
                </select> 
            </div>



        
            <div class="mb-3">
                <label for="bio" class="form-label">Bio</label>
                <textarea class="form-control" id="bio" name="bio" rows="3" required>{{ $chef->bio }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
