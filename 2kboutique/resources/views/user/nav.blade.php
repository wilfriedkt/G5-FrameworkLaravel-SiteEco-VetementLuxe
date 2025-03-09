<div class="navbar">
    <div class="logo">
        <a href="{{ url('/') }}"><img src="images/logo_2kboutique.png" width="100px" height="60px" alt="Luxeshop logo"></a>
    </div>
    <nav>
        <ul id="MenuItems">
            <li><a href="{{ url('/') }}">Accueil</a></li>
            <li class="submenu">
                <a href="{{ url('/products') }}">Vêtements</a>
                <ul class="dropdown">
                    <li><a href="{{ url('/products_homme') }}">Hommes</a></li>
                    <li><a href="{{ url('/products_femme') }}">Femmes</a></li>
                </ul>
            </li>

            <!-- Si l'utilisateur est connecté -->
            @auth
            <li><a href="{{ url('/consulter_commande') }}">Commandes</a></li>
            <li>
                <a href="{{ url('/panier') }}">
                    <i class="fas fa-shopping-cart" style="font-size: 24px; color: black;"></i> <!-- Icône panier -->
                </a>
            </li>
            <li class="submenu" style="margin-left: 0px">
                <a href="#">
                    <!-- Afficher la photo de profil -->
                    <img src="{{ Auth::user()->photo ? asset('storage/' . Auth::user()->photo) : asset('images/akre.jpg') }}"
                        alt="Photo de profil" class="profile-icon">
                </a>
                <ul class="dropdown">
                    <li><a href="#" id="openModal">Mon Profil</a></li>
                    <li>
                        <form method="POST" action="{{ route('deconnexion') }}">
                            @csrf
                            <button type="submit" style="background:none; border:none; color: red; cursor: pointer;">
                                Déconnexion
                            </button>
                        </form>
                    </li>
                </ul>
            </li>
            @include('user.profil')
            @endauth

            <!-- Si l'utilisateur n'est pas connecté -->
            @guest
            <li>
                <a href="{{ url('/account') }}">
                    <i class="fas fa-sign-in-alt"></i> <!-- Icône de connexion totalement noire -->
                </a>
            </li>
            @endguest
        </ul>
    </nav>
    <img src="{{ asset('images/menu.png') }}" class="menu-icon" onClick="menutoggle()" alt="Menu">
</div>
