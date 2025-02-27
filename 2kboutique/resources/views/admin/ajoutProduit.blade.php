<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Luxeshop - Ajouter un produit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-color:  #14b7d8;
            --secondary-color: #2c3e50;
            --accent-color: #e74c3c;
        }

        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #e3f0fa 100%);

            font-family: 'Ubuntu', sans-serif;
        }

        .submission-form {
            background: rgba(255, 255, 255, 0.95);
            padding: 2.5rem;
            /*border-radius: 15px;*/
            width: 80%;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            margin: 50px auto;
        }

        .form-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .form-header h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: var(--secondary-color);
        }

        .form-step {
            margin-bottom: 1.5rem;
        }

        .form-step label {
            font-weight: 500;
            color: var(--secondary-color);
        }

        .form-step input, .form-step textarea, .form-step select {
            border: 2px solid #e9ecef;
            border-radius: 8px;
            padding: 0.8rem;
            width: 100%;
            transition: all 0.3s ease;
        }

        .form-step input:focus, .form-step textarea:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.1);
        }

        .btn-submit {
            background: linear-gradient(45deg, var(--primary-color), var(--accent-color));
            border: none;
            /*border-radius: 30px;*/
            padding: 1rem 2rem;
            color: white;
            font-weight: bold;
            width: 100%;
            text-transform: uppercase;
            transition: all 0.3s ease;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 123, 255, 0.3);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="submission-form">
            <div class="form-header">
                <h1>Ajouter un produit</h1>
                <p>Complétez les informations nécessaires pour ajouter un produit.</p>
            </div>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.ajoutProduit') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-step">
                    <label for="nom">Nom du produit</label>
                    <input type="text" id="nom" name="nom" placeholder="Entrez le nom du produit" required>
                </div>

                <div class="form-step">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" rows="4" placeholder="Entrez une description du produit"></textarea>
                </div>

                <div class="form-step">
                    <label for="prix">Prix</label>
                    <input type="number" id="prix" name="prix" min="1" placeholder="Prix unitaire du produit (en FCFA)" required>
                </div>

                <div class="form-step">
                    <label for="stock">Stock</label>
                    <input type="number" id="stock" name="stock" min="0" placeholder="Quantité en stock (en Tonne)" required>
                </div>

                <div class="form-step">
                    <label for="type">Type de produit :</label>
                    <select name="type" required>
                        <option value="Nouveau Produit">Nouveau Produit</option>
                        <option value="Produit Phare">Produit Phare</option>
                    </select>
                </div>

                <div class="form-step">
                    <label for="genre">Produit pour :</label>
                    <select name="genre" required>
                        <option value="femme">femme</option>
                        <option value="homme">homme</option>
                    </select>
                </div>

                <div class="form-step">
                    <label for="image">Image du produit</label>
                    <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png">
                </div>

                <button type="submit" class="btn-submit">Ajouter le produit</button>
            </form>
        </div>
    </div>
</body>
</html>
