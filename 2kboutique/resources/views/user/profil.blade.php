<!-- resources/views/user/profile.blade.php -->
@section('content')
    <!-- Fenêtre modale -->
    <div id="profileModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Mon Profil</h2>
            <div class="profile-info">
                <!-- Affichage de la photo de l'utilisateur -->
                <img src="{{ asset('storage/' . $infoUser->photo) }}" alt="Photo Profil" class="profile-photo">
                <div class="profile-details">
                    <p><strong>Nom:</strong> {{ $infoUser->nom }}</p>
                    <p><strong>Prénom:</strong> {{ $infoUser->prenom }}</p>
                    <p><strong>Email:</strong> {{ $infoUser->email }}</p>
                    <p><strong>Téléphone:</strong> {{ $infoUser->telephone ?? 'Non renseigné' }}</p>
                    <p><strong>Adresse:</strong> {{ $infoUser->adresse ?? 'Non renseignée' }}</p>
                </div>
            </div>
            <!-- Formulaire pour supprimer le compte -->
            <form action="{{ route('delete.account') }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer votre compte ?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer mon compte</button>
            </form>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        /* Styles pour la fenêtre modale */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            width: 60%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .close {
            color: #aaa;
            font-size: 28px;
            font-weight: bold;
            position: absolute;
            top: 10px;
            right: 20px;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .profile-info {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
        }

        .profile-photo {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin-right: 20px;
            border: 2px solid #000;
        }

        .profile-details {
            font-size: 16px;
        }

        .profile-details p {
            margin: 5px 0;
        }

        .btn-danger {
            background-color: red;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        .btn-danger:hover {
            background-color: darkred;
        }

        /* Styles pour le bouton d'ouverture de la modale */
        #openModal {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        #openModal:hover {
            background-color: #0056b3;
        }
    </style>
@endsection

@section('scripts')
    <script>
        // Ouvrir la modale lorsque l'utilisateur clique sur le bouton
        document.getElementById("openModal").onclick = function() {
            document.getElementById("profileModal").style.display = "flex";
        }

        // Fermer la modale lorsque l'utilisateur clique sur la croix
        document.getElementsByClassName("close")[0].onclick = function() {
            document.getElementById("profileModal").style.display = "none";
        }

        // Fermer la modale si l'utilisateur clique en dehors de la modale
        window.onclick = function(event) {
            if (event.target == document.getElementById("profileModal")) {
                document.getElementById("profileModal").style.display = "none";
            }
        }
    </script>
@endsection
