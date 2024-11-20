<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Ajouter un Chef</h2>
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Nom Chef</label>
                <input type="text" class="form-control" id="name" placeholder="Entrez le nom du chef" required>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">importer une photo</label>
                <input class="form-control" type="file" id="formFile" required>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Biographie du chef</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
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
                        vous confirmez ces donnees du chef ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non</button>
                        <a href="{{asset('message')}}" type="button" class="btn btn-primary" id="confirmBtn">Oui</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
                
</body>
</html>