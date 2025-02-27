<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Détails du produit - Redstore</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384- AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

<div class ="header">

    <div class="container">

        <div class="navbar">

            <div class="logo">

                <a href="{{ url('/') }}"><img src="{{ asset('images/logo_2kboutique.png') }}" width="100px" height="60px"></a>

            </div>

            <nav>

                <ul id="MenuItems">

                    <li><a href="{{ url('/') }}">Accueil</a></li>

                    <li class="submenu">

                        <a href="#">Vêtements</a>

                        <ul class="dropdown">

                            <li><a href="{{ url('products_homme') }}">Hommes</a></li>

                            <li><a href="{{ url('products_femme') }}">Femmes</a></li>

                        </ul>

                    </li>

                    <li><a href="{{ url('/account') }}">Commandes</a></li>

                    <li><a href="{{ url('/account') }}">S'inscrire/Se connecter</a></li>

                </ul>

            </nav>

            <a href="{{ url('cart') }}"><img src="{{ asset('images/cart.png') }}" width="30px" height="30px"></a>

            <img src="{{ asset('images/menu.png') }}" class="menu-icon" onClick="menutoggle()">

        </div>

    </div>
</div>

<div class="small-container single-product">
    <div class="row">
        <div class="col-2">
            <img class="img-detail" src="{{ asset('storage/' . $produit->image) }}" width="100%" id="ProductImg">
        </div>

        <div class="col-2">
            <p>Accueil / {{ $produit->nom }}</p>
            <h1>{{ $produit->nom }}</h1>
            <h4>{{ number_format($produit->prix, 0, ',', '') }} FCFA</h4>

            <select>
                <option>Choix de la taille</option>
                <option>S</option>
                <option>M</option>
                <option>L</option>
                <option>XL</option>
                <option>XXL</option>
            </select>

            <input type="number" value="1">
            <a href="{{ url('/cart') }}" class="btn">Ajouter au panier</a>
            <a href="{{ url('') }}" class="bouton-commander">Commander</a>
            <h3>Détails du produit <i class="fa fa-indent"></i></h3>
            <p>{{ $produit->description }}</p>
        </div>
    </div>
</div>


</script>
</body>

</html>
