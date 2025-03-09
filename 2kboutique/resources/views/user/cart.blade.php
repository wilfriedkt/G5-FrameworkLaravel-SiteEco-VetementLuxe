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
<body>
    <div class="container">
        @include('user.nav')
    </div>

    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Produit</th>
                <th>Quantité</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="{{ asset('images/gucci1.png') }}">
                        <div>
                            <p>Gucci - Modèle ‎823832 XJG7Z 1152</p>
                            <small>Prix: 10.000 FCFA</small><br>
                            <a href="">Supprimé</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>10.000 FCFA</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="{{ asset('images/gucci2.png') }}">
                        <div>
                            <p>Gucci - Modèle ‎789582 XJGUL 5728</p>
                            <small>Prix: 8.500 FCFA</small><br>
                            <a href="">Supprimé</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>8.500 FCFA</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="{{ asset('images/gucci1.png') }}">
                        <div>
                            <p>Gucci - Modèle ‎789582 XJGUL 5728</p>
                            <small>Prix: 8.500 FCFA</small><br>
                            <a href="">Supprimé</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>8.500 FCFA</td>
            </tr>
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
