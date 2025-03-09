<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier - Luxeshop</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384- AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        @include('user.nav')
    </div>

    <div class="small-container cart-page">
        @if($paniers->isEmpty())
            <p>Votre panier est vide.</p>
        @else
        <table>
            <tr>
                <th>Produit</th>
                <th>Quantité</th>
                <th>Subtotal</th>
            </tr>

            @foreach($paniers as $item)
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="{{ asset('storage/' . $item->produit->image) }}">
                        <div>
                            <p>{{ $item->produit->nom }}</p>
                            <small>{{ number_format($item->produit->prix, 0, ',', ' ') }} FCFA</small><br>
                            <a href="" style="color: #e8860e;">Supprimé</a>
                            <a href="" style="color: #14b7d8; font-weight: 600;">Passer à la commande</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="{{ $item->quantite }}" style="width: 17%"></td>
                <td>{{ number_format($item->prix_total, 0, ',', ' ') }} FCFA</td>
            </tr>
            @endforeach
        @endif
        </table>

        <div class="total-price">
            <table>
                <tr>
                    <td>Total</td>
                    <td>27.000 FCFA</td>
                </tr>
            </table>
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
