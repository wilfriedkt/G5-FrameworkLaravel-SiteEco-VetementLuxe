<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title>Redstore | Ecommerce website</title>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="css/nouveauProduit.css">
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
    <body>
        <div class ="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.html"><img src="{{ asset('images/logo_2kboutique.png') }}" width="100px" height="60px"></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.html">Accueil</a></li>
                        <li class="submenu">
                            <a href="#">Vêtements</a>
                            <ul class="dropdown">
                                <li><a href="products_homme.html">Hommes</a></li>
                                <li><a href="products_femme.html">Femmes</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Commandes</a></li>
                        <li><a href="account.html">S'inscrire/Se connecter</a></li>
                    </ul>
                </nav>
                <a href="cart.html"><img src="images/cart.png" width="30px" height="30px"></a>
                <img src="{{ asset('images/menu.png') }}" alt="Logo" class="menu-icon" onClick="menutoggle()">

            </div>
            <div class="row" style="margin-left: 50px;">
                <div class="col-2">
                    <h1>Luxe & Elégance<br>Rien de moins !</h1>
                    <p>Plongez dans un univers où raffinement et tendance se rencontrent. Notre boutique vous propose une selection exclusive de vetements de luxe
                        pour hommes et femmes, alliant qualité exceptionnelle et design intemporel.
                    </p>
                    <a href="products.html" class="btn">Explore maintenant &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="images/imgAcceuil.png" style="margin-left: 80px;">
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <h2 class="title" >Produits en promotion</h2>
    <div class="item_store">
        <h1>Pour les hommes</h1>
        <div class="item_store_div">
          <div class="Your_Gadgets_Store">
            <script src="js/gadget_store_data.js" defer></script>
          </div>
        </div>
        <h1>Pour les femmes</h1>
        <div class="item_store_div">
          <div class="trending_fashion_zone">
            <script src="js/trending_fashion_zone.js" defer></script>
          </div>
        </div>
    </div>
    <br><br>

        <!------------------------------ featured Products------------------------------>
        <div class="small-container">
            <h2 class="title" >Produits phares</h2>
                <div class="row">
                    <div class="col-4">
                        <a href="products-details.html"><img src="images/gucci1.png"></a>
                        <a href="products-details.html"><h4>Gucci - Modèle ‎823832 XJG7Z 1152</h4></a>
                        <div class="rating">
                            <!--(before this added awesome4 cdn font link to the head)added a cdn link by searching font awesome4 icon and from the site  search the star entering the first option and getting a link of this fa-star*-->
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-half-o" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>10.000 FCFA</p>
                    </div>
                    <div class="col-4">
                        <a href="products-details.html"><img src="images/gucci2.png"></a>
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
                        <a href="products-details.html"><img src="images/nike1.png"></a>
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
                        <a href="products-details.html"><img src="images/adidas1.png"></a>
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


             <h2 class="title" >Nouveaux produits</h2>
                <div class="row">
                    <div class="col-4">
                        <a href="products-details.html"><img src="images/product-12.jpg"></a>
                        <h4>Flat Heel gray hoes</h4>
                        <div class="rating">
                            <!--(before this added awesome4 cdn font link to the head)added a cdn link by searching font awesome4 icon and from the site  search the star entering the first option and getting a link of this fa-star*-->
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-half-o" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>20.000 FCFA</p>
                    </div>
                    <div class="col-4">
                        <a href="products-details.html"><img src="images/product-3.jpg"></a>
                        <h4>Lace-Fastening black Shoes</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-half-o" ></i>
                        </div>
                        <p>12.000 FCFA</p>
                    </div>
                    <div class="col-4">
                        <a href="products-details.html"><img src="images/product-12.jpg"></a>
                        <h4>HRX Men's cotton socks</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>22.000 FCFA</p>
                    </div>
                    <div class="col-4">
                        <a href="products-details.html"><img src="images/product-3.jpg"></a>
                        <h4>Lace-Up Running Shoes</h4>
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
            <!--new row for the latest product-->
                <div class="row">
                    <div class="col-4">
                        <a href="products-details.html"><img src="images/product-3.jpg"></a>
                        <h4>HRX cotton socks</h4>
                        <div class="rating">
                            <!--(before this added awesome4 cdn font link to the head)added a cdn link by searching font awesome4 icon and from the site  search the star entering the first option and getting a link of this fa-star*-->
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-half-o" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>25.000 FCFA</p>
                    </div>
                    <div class="col-4">
                        <a href="products-details.html"><img src="images/product-12.jpg"></a>
                        <h4>Flat Lace-Fastening Shoes</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-half-o" ></i>
                        </div>
                        <p>26.000 FCFA</p>
                    </div>
                    <div class="col-4">
                        <a href="products-details.html"><img src="images/product-3.jpg"></a>
                        <h4>Loafers Men (Gray)</h4>
                        <div class="rating">
                            <i class="fa fa-star-o" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>15.000 FCFA</p>
                    </div>
                    <div class="col-4">
                        <a href="products-details.html"><img src="images/product-12.jpg"></a>
                        <h4>Lace-Fastening white Shoes</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>21.000 FCFA</p>
                    </div>
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
                        <p>Exclusivement disponible sur 2KBoutique</p>
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
