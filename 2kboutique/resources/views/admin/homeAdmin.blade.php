<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title>Luxeshop | Ecommerce website</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/nouveauProduit.css') }}">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
        <!--added a cdn link by searching font awesome4 cdn and getting this link from https://www.bootstrapcdn.com/fontawesome/ this url*/-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script
      src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
      data-auto-replace-svg="nest"
    ></script>

    </head>
    <body class="bodyAll">
        <div class ="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="{{ url('/admin') }}"><img src="images/logo_2kboutique.png" width="100px" height="60px"></a>
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
            <div class="row" style="margin-left: 50px;">
                <div class="col-2">
                    <h1>Luxe & Elégance<br>Rien de moins !</h1>
                    <p>Plongez dans un univers où raffinement et tendance se rencontrent. Notre boutique vous propose une selection exclusive de vetements de luxe
                        pour hommes et femmes, alliant qualité exceptionnelle et design intemporel.
                    </p>
                    <a href="{{ url('/products') }}" class="btn">Explore maintenant &#8594;</a>
                </div>
                <div class="col-2">
                    <img class="img-acceuille" src="{{ asset('images/gallery-2.jpg') }}" style="margin-left: 80px;" alt="Accueil">
                </div>
            </div>
        </div>
    </div>
    <br>


        <!------------------------------ featured Products------------------------------>
        <div class="small-container">

            <h1 class="title">Produits en promotion</h1>
            <div class="item_store">
                <h2 class="sous-titre">Pour les hommes</h2>
                <div class="item_store_div">
                <div class="Your_Gadgets_Store">
                    <script src="{{ asset('js/gadget_store_data.js') }}" defer></script>
                </div>
                </div>
                <br>
                <h2 class="sous-titre">Pour les femmes</h2>
                <div class="item_store_div">
                <div class="trending_fashion_zone">
                    <script src="{{ asset('js/trending_fashion_zone.js') }}" defer></script>
                </div>
                </div>
            </div>
            <br>

            <hr>

            <h1 class="title">Produits phares</h1>
            <div class="row">
                @forelse ($produitsPhares as $produit)
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
                    <p>Aucun produit phare disponible.</p>
                @endforelse
            </div>


            <hr>

            <h1 class="title">Nouveaux produits</h1>
            <div class="row">
                @forelse ($nouveauxProduits as $produit)
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
                    <p>Aucun nouveau produit disponible.</p>
                @endforelse
            </div>

        </div>

        <!--------------------------`   offer   --------------------------------->
        <div class="offer">
            <div class="small-container">
                <div class="row">
                    <div class="col-2">
                        <img src="images/imgAcceuil.png" class="offer-img">
                    </div>
                    <div class="col-2">
                        <p>Exclusivement disponible sur Luxeshop</p>
                        <h1>Vêtements Gucci</h1>
                        <small> Achetez les dernières collections de vetements Gucci en ligne sur 2kboutique aux meilleurs prix, parmi les plus grandes marques telles qu'Adidas, Nike, Puma, Asics et Sparx, et profitez de votre shopping en toute tranquillité.</small><br>
                        <a href="products.html" class="btn">Acheter maintenant &#8594;</a>
                    </div>
                </div>
            </div>
        </div>



        <!------------------------------Testimonial---------------------------------->
        <div class="testimonial">
            <div class="small-container">
                <div class="row">
                    <div class="col-3">
                        <i class="fa fa-quote-left" ></i>
                        <p>Excellente expérience dans l’ensemble ! Le produit est arrivé à temps et bien emballé. Il est superbe et fonctionne parfaitement. J’aurais juste aimé plus de variété de couleurs. Malgré cela, je suis très satisfait de mon achat !</p>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <img src="images/akre.jpg">
                        <h3>AKRE Ange David</h3>
                    </div>
                    <div class="col-3">
                        <i class="fa fa-quote-left" ></i>
                        <p>J’ai fait des achats sur de nombreuses boutiques en ligne, mais celle-ci se démarque vraiment ! Le produit a dépassé mes attentes en termes de qualité et d’apparence. De plus, la livraison gratuite était un excellent bonus ! Je reviendrai certainement pour d’autres achats.</p>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <img src="images/photoWilfried.jpg">
                        <h3>Wilfried Kigninman TOURE</h3>
                    </div>
                    <div class="col-3">
                        <i class="fa fa-quote-left" ></i>
                        <p>Wow ! Je suis vraiment impressionné par le service et la qualité du produit que j’ai acheté. Le site était facile à naviguer, et la livraison a été ultra rapide. En plus, la remise que j’ai eue a rendu l’achat encore plus intéressant ! Je recommande vivement.</p>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <img src="images/josue.jpg">
                        <h3>KOUAKIO Josué Noel Yao</h3>
                    </div>
                </div>
            </div>
        </div>

        <!----------------------------------Brands------------------------------------>
        <div class="brands">
            <div class="small-container">
                <div class="row">
                    <div class="col-5">
                        <img src="images/gucci.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="images/adidas.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="images/nike.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="images/puma.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="images/prada.png" alt="">
                    </div>
                </div>
            </div>
        </div>


        <!----------------------------------footer------------------------------------->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Téléchargez Notre Application</h3>
                    <p>Téléchargez l'application pour Android et iOS.</p>
                    <div class="app-logo">
                        <img src="images/play-store.png" alt="Google Play">
                        <img src="images/app-store.png" alt="App Store">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images/logo_2kboutique.png" alt="2K Boutique Logo">
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

            <hr> <!-- Ligne horizontale -->
            <p class="copyright">Copyright © 2025 - 2KBoutique - Tous droits réservés</p>
        </div>
    </div>


        <!-----------------------------------js for toggle menu----------------------------------------------->
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
    </body>
</html>
