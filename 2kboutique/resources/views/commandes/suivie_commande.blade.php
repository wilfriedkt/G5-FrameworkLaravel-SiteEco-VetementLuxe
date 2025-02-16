<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Produit - 2KBoutique</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Détails du Produit</h1>
        <div class="card mx-auto shadow-lg p-3 mb-5 bg-white rounded" style="max-width: 400px;">
            @if(isset($produit))
                <img src="{{ asset('images/' . $produit->image) }}" alt="{{ $produit->nom }}" class="card-img-top">
                <div class="card-body">
                    <h2 class="card-title">{{ $produit->nom }}</h2>
                    <p class="card-text"><strong>Prix:</strong> {{ number_format($produit->prix, 0, ',', ' ') }} FCFA</p>
                    <p class="card-text"><strong>Description:</strong> {{ $produit->description }}</p>
                    <form action="{{ route('panier.add', $produit->id) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="quantite" class="form-label">Quantité :</label>
                            <input type="number" name="quantite" id="quantite" value="1" min="1" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Ajouter au Panier</button>
                    </form>
                </div>
            @else
                <p class="text-danger text-center">Produit non trouvé.</p>
            @endif
        </div>
    </div>
</body>
</html>
