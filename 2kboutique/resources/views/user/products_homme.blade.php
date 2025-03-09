<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - Redstore</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384- AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bodyAll">
    <div class="container">
        @include('user.nav')
    </div>

    <div class="small-container">
        <div class="row row-2">
            <h2 class="sous-titre">Tous les produits pour homme</h2>
            <select>
                <option>Tri par défaut</option>
                <option>Trier par prix</option>
                <option>Trier par marque</option>
                <option>Trier par évaluation</option>
                <option>Trier par popularité</option>
            </select>
        </div>

        <div class="row">
            @forelse ($produitsHomme as $produit)
            <div class="col-4">
                <a href="{{ url('products_details/' . $produit->id) }}">
                    <img src="{{ asset('storage/' . $produit->image) }}" alt="{{ $produit->nom }}">
                </a>
                <h4>{{ $produit->nom }}</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>{{ number_format($produit->prix, 0, ',', '') }} FCFA</p>
            </div>
            @empty
                <p>Aucun produit pour homme n'est disponible.</p>
            @endforelse
        </div>

        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
        </div>
    </div>

   <!----------------------------------footer------------------------------------->
   @include('user.footer')

    <script>
        var menuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";
        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            } else {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>
</body>
</html>
