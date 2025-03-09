<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suivi de Commande - Redstore</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        @include('user.nav')
    </div>

    <div class="small-container">
        <h2>Suivi de vos commandes</h2>
        <table>
            <thead>
                <tr>
                    <th>Numéro de commande</th>
                    <th>Date</th>
                    <th>Statut</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#12345</td>
                    <td>2025-01-01</td>
                    <td><span class="status delivered">Livrée</span></td>
                    <td>50.000 FCFA</td>
                </tr>
                <tr>
                    <td>#12346</td>
                    <td>2025-01-02</td>
                    <td><span class="status in-progress">En cours</span></td>
                    <td>30.000 FCFA</td>
                </tr>
                <!-- Ajouter d'autres commandes ici -->
            </tbody>
        </table>
    </div>

    <!----------------------------------footer------------------------------------->
    @include('user.footer')


    <script>
        var menuItems = document.getElementById("MenuItems");
        menuItems.style.maxHeight = "0px";
        function menutoggle() {
            if (menuItems.style.maxHeight == "0px") {
                menuItems.style.maxHeight = "200px";
            } else {
                menuItems.style.maxHeight = "0px";
            }
        }
    </script>
</body>
</html>
