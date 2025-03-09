<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Connexion/Inscription - 2kboutique</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384- AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        @include('user.nav')
    </div>

    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="{{ asset('images/imgAcceuil.png') }}" width="65%" style="margin-left:100px" >
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Se connecter</span>
                            <span onclick="register()">S'inscrire</span>
                            <hr id="Indicator">
                        </div>

                        <!-- Affichage du message de succès -->
                        @if (session('successConn'))
                        <div id="successPopup" style="display:none; position: fixed; top: 20%; left: 50%; transform: translateX(-50%); padding: 20px; background-color: green; color: white; font-size: 12px; font-weight: bold; border-radius: 5px;">
                            {{ session('successConn') }}
                        </div>
                        @endif

                        <!-- Affichage des erreurs -->
                        @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li style="color: red; font-size: 12px;">{{ $error }}</li>
                            @endforeach
                        </ul>
                        @endif

                        <!-- Formulaire de connexion -->
                        <form method="POST" action="{{ route('connexion') }}" id="LoginForm">
                            @csrf
                            <input type="email" name="email" placeholder="Email" required value="{{ old('email') }}">
                            <input type="password" name="motDePasse" placeholder="Mot de passe" required>
                            <button type="submit" class="btn">Se connecter</button>
                            <a href="#">Mot de passe oublié</a>
                        </form>


                        @if (session('success'))
                            <div id="successMessage" style="color: green; padding: 5px; font-size: 12px; font-weight: bold;">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger" style="color: red; font-size: 12px;">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('inscription') }}" id="RegForm" enctype="multipart/form-data">
                            @csrf
                            <input type="text" name="nom" placeholder="Nom" value="{{ old('nom') }}" required>
                            <input type="text" name="prenom" placeholder="Prénom" value="{{ old('prenom') }}" required>
                            <input type="email" name="email" placeholder="email" value="{{ old('email') }}" required>
                            <input type="password" name="motDePasse" placeholder="Mots de passe" required>
                            <input type="password" name="motDePasse_confirmation" placeholder="Confirmer le mot de passe" required>
                            <input type="file" name="photo" accept="image/*">
                            <button type="submit" class="btn">S'inscrire</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
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

        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("Indicator");

        function register() {
            RegForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translateX(0px)";
            Indicator.style.transform = "translateX(100px)";
        }

        function login() {
            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translateX(300px)";
            Indicator.style.transform = "translateX(0px)";
        }
    </script>

<script>
    // Affichage de la popup et redirection après 3 secondes
    document.addEventListener("DOMContentLoaded", function() {
        // Vérifier si une session avec succès est présente
        let successMessage = "{{ session('success') }}";
        if (successMessage) {
            let popup = document.getElementById("successPopup");
            popup.style.display = "block"; // Afficher la popup

            // Rediriger vers la page d'accueil après 3 secondes
            setTimeout(function() {
                window.location.href = "{{ route('index') }}"; // Redirection vers la page d'accueil
            }, 3000); // Délai de 3 secondes avant la redirection
        }
    });
    </script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let successMessage = document.getElementById("successMessage");
        let redirectUrl = "{{ session('redirect') }}"; // Récupère l'URL de redirection

        if (successMessage && redirectUrl) {
            setTimeout(function() {
                window.location.href = redirectUrl; // Redirige vers l'accueil
            }, 3000); // Attente de 3 secondes
        }
    });
</script>

</body>

</html>
