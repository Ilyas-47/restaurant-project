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
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Nom Plat</label>
                <input type="text" class="form-control" id="name" placeholder="Entrez le nom du plat" required>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">importer une photo</label>
                <input class="form-control" type="file" id="formFile" required>
              </div>
              <div>
                <label for="name" class="form-label">Categorie</label>
                <select class="form-select" aria-label="Default select example" required>
                  <option selected>Choisir une categorie</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>  
              </div>

              <div>
                <label for="name" class="form-label">Chef</label>
                <select class="form-select" aria-label="Default select example" required>
                  <option selected>Choisir le chef</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>  
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Prix</label>
                <input type="number" class="form-control" id="name" placeholder="Prix par MAD" min="1" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Rate</label>
                <input type="number" class="form-control" id="name" placeholder="rate" max="5" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Temps a livre</label>
                <input type="number" class="form-control" id="name" placeholder="temps par minutes" required>
            </div>
            <div>
                <label for="name" class="form-label">Diatry</label>
                <select class="form-select" aria-label="Default select example" required>
                  <option selected>Selectionner la diatery</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>  
              </div>
            <br>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirmationModal">
                Ajouter
                 </button>
                        </form>
        <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmationModalLabel">Confirmer les donnees</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        vous confirmez ces donnees du plat ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non</button>
                        <a href="{{asset('message')}}"  type="button" class="btn btn-primary" id="confirmBtn">Oui</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
