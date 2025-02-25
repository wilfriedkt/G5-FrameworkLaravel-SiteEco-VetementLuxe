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
        <div class="navbar">
            <div class="logo">
                <a href="{{ url('index') }}"><img src="{{ asset('images/logo_2kboutique.png') }}" width="100px" height="60px" alt="Logo 2K Boutique"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="{{ url('index') }}">Accueil</a></li>
                    <li class="submenu">
                        <a href="#">Vêtements</a>
                        <ul class="dropdown">
                            <li><a href="{{ url('products_homme') }}">Hommes</a></li>
                            <li><a href="{{ url('products_femme') }}">Femmes</a></li>
                        </ul>
                    </li> 
                    <li class="submenu">
                        <a href="#">Commandes</a>
                        <ul class="dropdown">
                            <li><a href="{{ url('C:\Users\ygsor\laravel\G5-FrameworkLaravel-SiteEco-VetementLuxe\2kboutique\resources\views\commandes\consulter_commande.blade.php') }}">Consulter commande</a></li>
                            <li><a href="{{ url('C:\Users\ygsor\laravel\G5-FrameworkLaravel-SiteEco-VetementLuxe\2kboutique\resources\views\commandes\historique_commandes.blade.php') }}">Historique de commande</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('account') }}">S'inscrire/Se connecter</a></li>
                </ul>
            </nav>
            <a href="{{ url('cart') }}"><img src="{{ asset('images/cart.png') }}" width="30px" height="30px" alt="Panier"></a>
            <img src="{{ asset('images/menu.png') }}" class="menu-icon" onClick="menutoggle()" alt="Menu">
        </div>
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

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Téléchargez Notre Application</h3>
                    <p>Téléchargez l'application pour Android et iOS.</p>
                    <div class="app-logo">
                        <img src="{{ asset('images/play-store.png') }}" alt="Google Play">
                        <img src="{{ asset('images/app-store.png') }}" alt="App Store">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="{{ asset('images/logo_2kboutique.png') }}" alt="2K Boutique Logo">
                    <p>Notre objectif est de rendre le plaisir et les bienfaits du shopping accessibles à tous.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Liens Utiles</h3>
                    <ul>
                        <li><a href="#">Blog</a></ <li><a href="#">Politique de retour</a></li>
                        <li><a href="#">Devenir affilié</a></li>
                        <li><a href="#">Consulter la FAQ</a></li>
                        <li><a href="#">Contacter le service support</a></li>
                        <li><a href="#">À propos de 2KBoutique</a></li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Suivez-nous</h3>
                    <ul class="social-links">
                        <li><a href="#"><i class="fab fa-facebook"></i> Facebook</a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i> YouTube</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright © 2025 - 2KBoutique - Tous droits réservés</p>
        </div>
    </div>

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