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

                <img src="{{ asset('images/gucci1.png') }}" width="100%" id="ProductImg">

                <div class="small-img-row">

                    <div class="small-img-col">

                        <img src="{{ asset('images/gucci1.png') }}" width="100%" class="small-img" >

                    </div>

                    <div class="small-img-col">

                        <img src="{{ asset('images/gucci1-1.png') }}" width="100%" class="small-img">

                    </div>

                    <div class="small-img-col">

                        <img src="{{ asset('images/gucci1-2.png') }}" width="100%" class="small-img">

                    </div>

                    <div class="small-img-col">

                        <img src="{{ asset('images/gucci1-3.png') }}" width="100%" class="small-img">

                    </div>

                </div>

            </div>

            <div class="col-2">

                <p>Accueil / Vêtements Gucci</p>

                <h1>Gucci - Modèle ‎823832 XJG7Z 1152</h1>

                <h4>10.000 FCFA</h4>

                <select>

                    <option>Choix de la taille</option>

                    <option>S</option>

                    <option>M</option>

                    <option>L</option>

                    <option>XL</option>

                    <option>XXL</option>

                </select>

                <input type="number" values="1">
                
                <a href="{{ url('/cart') }}" class="btn">Ajouter au panier</a>

                    <h3>Details du produit <i class="fa fa-indent" ></i></h3>

                    <br>

                <p>Pour la collection Printemps-Été 2025, les sweat-shirts arborent de nombreux imprimés avec différents symboles, du Double G aux surfeurs et dauphins. Ce modèle à col ras du cou noir présente des imprimés sur toute la surface dans une teinte vert clair contrastante.

                    Jersey de coton noir teint en pièce
                    Imprimé symboles Gucci sur le devant et les côtés
                    Imprimé surfeur Gucci au dos
                    Col ras du cou
                    Manches montées bas
                    Finitions côtelées
                    Manches longues
                    Longueur: 76cm; Épaule: 54cm; Poitrine: 61cm; Longueur des manches : 62.5cm; pour la taille M
                    Fabriqué en Italie
                    Le produit représenté sur cette image est une taille S
                </p>
            </div>

        </div>

    </div>
<!-- Titre de la section
    <div class="small-container">
        <div class="row row-2">
            <h2>Produits similaires</h2>
            <a href="{{ url('products') }}"><p>Voir plus</p></a>
        </div>
    </div>

    <div class="small-container">
        <div class="row">
                <div class="col-4">
                   <a href="{{ url('/products-details') }}"><img src="{{ asset('images/gucci1.png') }}"></a>
                   <a href="{{ url('/products-details') }}"><h4>Gucci - Modèle ‎823832 XJG7Z 1152</h4></a>
                   <div class="rating">
                       
                       <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                       <i class="fa fa-star-half-o" ></i>
                       <i class="fa fa-star-o" ></i>
                   </div>
                   <p>10.000 FCFA</p>
               </div>
               <div class="col-4">
                   <a href="{{ url('/products-details') }}"><img src="{{ asset('images/gucci2.png') }}"></a>
                   <h4>Gucci - Modèle ‎789582 XJGUL 5728</h4>
                   <div class="rating">
                       <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                       <i class="fa fa-star-half-o" ></i>
                   </div>
                   <p>8.500 FCFA</p>
               </div>
               <div class="col-4">
                   <a href="{{ url('/products-details') }}"><img src="{{ asset('images/nike1.png') }}"></a>
                   <h4>Nike - Chicago Bulls Courtside</h4>
                   <div class="rating">
                       <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                       <i class="fa fa-star-o" ></i>
                   </div>
                   <p>25.000 FCFA</p>
               </div>
               <div class="col-4">
                   <a href="{{ url('/products-details') }}"><img src="{{ asset('images/adidas1.png') }}"></a>
                   <h4>Adidas - Veste de survêtement</h4>
                   <div class="rating">
                       <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                       <i class="fa fa-star-o" ></i>
                       <i class="fa fa-star-o" ></i>
                   </div>
                   <p>22.000 FCFA</p>
               </div>  
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
        var menuItems=document.getElementById("MenuItems");
        
        MenuItems.style.maxHeight="0px";
        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px"){
                MenuItems.style.maxHeight="200px";
            }
            else{
                MenuItems.style.maxHeight="0px";
            }
        }
    </script>

<script>
    var productImg=document.getElementById("productImg");
    var smallImg=document.getElementsByClassName("small-img");
    
    smallImg[0].onclick=function(){
        productImg.src=smallImg[0].src;
    }
     smallImg[1].onclick=function(){
        productImg.src=smallImg[1].src;
    }
      smallImg[2].onclick=function(){
        productImg.src=smallImg[2].src;
    }
       smallImg[3].onclick=function(){
        productImg.src=smallImg[3].src;
    }
    
    
</script>
</body>

</html>