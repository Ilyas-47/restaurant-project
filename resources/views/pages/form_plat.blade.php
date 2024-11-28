<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Ajouter un plat</h2>
        @if(session('success')) 
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('store_plat') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nom_plat" class="form-label">Nom Plat</label>
                <input type="text" class="form-control" id="nom_plat" name="nom_plat" placeholder="Entrez le nom du plat" required>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Importer une photo</label>
                <input class="form-control" type="file" id="formFile" name="image_plat" required>
            </div>
            <div>
                <label for="categorie" class="form-label">Categorie</label>
                <select class="form-select" id="categorie" name="categorie" aria-label="Default select example" required>
                  <option selected>Choisir une categorie</option>
                  <option value="Moroccan">Moroccan cuisine</option>
                  <option value="Italien">Italian cuisine</option>
                  <option value="france">French cuisine</option>
                  <option value="asian">Asian cuisine</option>
                </select>  
            </div>
            <div>
                <label for="chef" class="form-label">Chef</label>
                <select class="form-select" id="chef" name="id_chef" aria-label="Default select example" required>
                    <option selected>Selectionner un chef</option>
                    @foreach($chefs as $chef) 
                        <option value="{{ $chef->id_chef }}">{{ $chef->nom_chef }}</option>    
                    @endforeach                
                </select>
            </div>
            <div class="mb-3">
                <label for="prix" class="form-label">Prix</label>
                <input type="number" class="form-control" id="prix" name="prix" placeholder="Prix par MAD" min="1" required>
            </div>
            <div class="mb-3">
                <label for="rate" class="form-label">Rate</label>
                <select class="form-select" id="rate" name="rate" aria-label="Default select example" required>
                    <option selected>Selectionner Rate </option>
                    <option value="5 stars">5 stars</option>
                    <option value="4 stars and up">4 stars and up</option>
                    <option value="3 stars and up">3 stars and up</option>
                </select>              
            </div>
            <div>
                <label for="delivery" class="form-label">Temps pour livrer</label>
                <select class="form-select" id="delivery" name="delivery" aria-label="Default select example" required>
                    <option selected>Selectionner le temps </option>
                    <option value="Under 30 minutes">Under 30 minutes</option>
                    <option value="30-60 minutes">30-60 minutes</option>
                    <option value="Over 60 minutes">Over 60 minutes</option>
                </select>
            </div>
            <div>
                <label for="diatry" class="form-label">Diatry</label>
                <select class="form-select" id="diatry" name="diatry" aria-label="Default select example" required>
                  <option selected>Selectionner la diatry</option>
                  <option value="Gluten-Free">Gluten-Free</option>
                  <option value="Dairy-Free">Dairy-Free</option>
                  <option value="Vegetarian">Vegetarian</option>
                  <option value="Vegan">Vegan</option>
                </select> 
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
