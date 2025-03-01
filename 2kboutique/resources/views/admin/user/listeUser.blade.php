<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste Utilisateurs - Luxeshop</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384- AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bodyAll">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="{{ url('/admin') }}"><img src="{{ asset('images/logo_2kboutique.png') }}" width="100px" height="60px"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li class="submenu">
                        <a href="{{ url('/') }}">Espace Utilisateur</a>
                        <ul class="dropdown">
                            <li><a href="{{ url('/') }}">Accueil</a></li>
                            <li class="submenu-one">
                                <a href="{{ url('/products') }}">Vêtements</a>
                                <ul class="dropdown-one">
                                    <li><a href="{{ url('/products_homme') }}">Hommes</a></li>
                                    <li><a href="{{ url('/products_femme') }}">Femmes</a></li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="{{ url('/admin/produit/listeProduit') }}">Gestion Produit</a>
                        <ul class="dropdown">
                            <li><a href="{{ url('/admin/produit/listeProduit') }}">Tout les Produits</a></li>
                            <li><a href="{{ url('/admin/produit/ajoutProduit') }}">Ajouter</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="{{ url('/admin/produit/listeProduit') }}">Gestion Commandes</a>
                        <ul class="dropdown">
                            <li><a href="{{ url('/admin/produit/listeProduit') }}">Nouvelles C.</a></li>
                            <li><a href="{{ url('/admin/produit/ajoutProduit') }}">C. validées</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="{{ url('/admin/user/listeUser') }}">Gestion User</a>
                        <ul class="dropdown">
                            <li><a href="{{ url('admin/user/listeUser') }}">Liste user</a></li>
                            <li><a href="{{ url('/admin/produit/ajoutProduit') }}">Ajouter</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="small-container cart-page">
        <table>
            <tr>
                <th class="th-user">Id</th>
                <th class="th-user">Nom & Prenom(s)</th>
                <th class="th-user">Email</th>
                <th class="th-user">Mot de passe</th>
                <th class="th-user">Date d'inscription</th>
                <th class="th-user">Action</th>
            </tr>
            @forelse ($allUser as $user)
            <tr>
                <td>{{$user->idUtilisateur}}</td>
                <td>
                        <p>
                            <strong> {{$user->nom}}
                            <br>{{$user->prenom}}</strong>
                        </p>

                </td>
                <td>{{$user->email}} FCFA</td>
                <td>@geek</td>
                <td>{{$user->dateInscription}}</td>
                <td>
                    <a href="" >Modifié</a>
                    <a href="" class="bouton-modifie">Supprimé</a>
                </td>
            </tr>
            @empty
                <p>Aucun utilisateur n'est disponible.</p>
            @endforelse
        </table>

        <div class="total-price">
            <table class="total-user">
                <tr>
                    <td>Total des utilisateurs</td>
                    <td>27.000 FCFA</td>
                </tr>
            </table>
        </div>
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
                        <li>Blog</li>
                        <li>Politique de retour</li>
                        <li>Devenir affilié</li>
                        <li>Consulter la FAQ</li>
                        <li>Contacter le service support</li>
                        <li>À propos de 2KBoutique</li>
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
