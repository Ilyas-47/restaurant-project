<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Plat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Modifier Plat</h2>
        <form action="{{ route('chef_update', $plat->id_plat) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nom_plat" class="form-label">Nom du Plat</label>
                <input type="text" class="form-control" id="nom_plat" name="nom_plat" value="{{ $plat->nom_plat }}" required>
            </div>
            <div class="mb-3">
                <label for="nom_chef" class="form-label">Nom du Chef</label>
                <input type="text" class="form-control" id="nom_chef" name="nom_chef" value="{{ $plat->nom_chef }}" required>
            </div>
            <div class="mb-3"> 
                <label for="categorie" class="form-label">Categorie</label> 
                <select class="form-select" id="categorie" name="categorie" required> 
                    <option value="" disabled {{ !$plat->categorie ? 'selected' : '' }}>Selectionner la categorie</option> 
                    <option value="Moroccan" {{ $plat->categorie == 'Moroccan' ? 'selected' : '' }}>Moroccan</option> 
                    <option value="Italien" {{ $plat->categorie == 'Italien' ? 'selected' : '' }}>Italien</option> 
                    <option value="France" {{ $plat->categorie == 'France' ? 'selected' : '' }}>France</option> 
                    <option value="Asian" {{ $plat->categorie == 'Asian' ? 'selected' : '' }}>Asian</option> 
                </select> 
            </div>
            <div class="mb-3">
                <label for="prix" class="form-label">Prix </label>
                <input type="number" class="form-control" id="prix" name="prix" value="{{ $plat->prix }}" required>
            </div>
            <div class="mb-3">
                <label for="rate" class="form-label">Rate</label>
                <select class="form-select" id="rate" name="rate" required> 
                    <option value="" disabled {{ !$plat->categorie ? 'selected' : '' }}>Rate</option> 
                    <option value="5 stars" {{ $plat->categorie == '5 stars' ? 'selected' : '' }}>5 stars</option> 
                    <option value="4 stars and up" {{ $plat->categorie == '4 stars and up' ? 'selected' : '' }}>4 stars and up</option> 
                    <option value="3 stars and up" {{ $plat->categorie == '3 stars and up' ? 'selected' : '' }}>3 stars and up</option> 
                </select>             
            </div>
            <div class="mb-3">
                <label for="delivery" class="form-label">Temps pour livrer</label>
                <select class="form-select" id="delivery" name="delivery" required> 
                    <option value="" disabled {{ !$plat->delivery ? 'selected' : '' }}>Selectionner le temps</option> 
                    <option value="Under 30 minutes" {{ $plat->delivery == 'Under 30 minutes' ? 'selected' : '' }}>Under 30 minutes</option> 
                    <option value="30-60 minutes" {{ $plat->delivery == '30-60 minutes' ? 'selected' : '' }}>30-60 minutes</option> 
                    <option value="Over 60 minutes" {{ $plat->delivery == 'Over 60 minutes' ? 'selected' : '' }}>Over 60 minutes</option> 
                </select>             
            </div>
            <div class="mb-3">
                <label for="diatry" class="form-label">Diatry</label>
                <select class="form-select" id="diatry" name="delivery" required> 
                    <option value="" disabled {{ !$plat->delivery ? 'selected' : '' }}>Selectionner la diatry</option> 
                    <option value="Gluten-Free" {{ $plat->delivery == 'Gluten-Free' ? 'selected' : '' }}>Gluten-Free</option> 
                    <option value="Dairy-Free" {{ $plat->delivery == 'Dairy-Free' ? 'selected' : '' }}>Dairy-Free</option> 
                    <option value="Vegetarian" {{ $plat->delivery == 'Vegetarian' ? 'selected' : '' }}>Vegetarian</option> 
                    <option value="Vegan" {{ $plat->delivery == 'Vegan' ? 'selected' : '' }}>Vegan</option> 

                </select>             
            </div>


            <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
