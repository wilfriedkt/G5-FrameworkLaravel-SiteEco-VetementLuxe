
    <!-- Fenêtre modale -->
    <div id="profileModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Mon Profil</h2>
            <div class="profile-info">
                <!-- Affichage de la photo de l'utilisateur -->
                <img src="{{ Auth::user()->photo ? asset('storage/' . Auth::user()->photo) : asset('images/akre.jpg') }}" alt="Photo Profil" class="profile-photo">
                <br>
                <div class="profile-details">
                    <p><strong>Nom:</strong> {{ Auth::user()->nom }}</p>
                    <p><strong>Prénom:</strong> {{ Auth::user()->prenom }}</p>
                    <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                    <p><strong>Téléphone:</strong> {{ Auth::user()->telephone ?? 'Non renseigné' }}</p>
                    <p><strong>Adresse:</strong> {{ Auth::user()->adresse ?? 'Non renseignée' }}</p>
                </div>
            </div>
            <!-- Formulaire pour supprimer le compte -->
            <form action="{{ route('delete.account') }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer votre compte ?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-danger">Supprimer mon compte</button>
            </form>
        </div>
    </div>

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
            background: radial-gradient(#fff, #f3faff);
            padding: 20px;
            border-radius: 5px;
            margin-left: 70%;
            width: 25%;
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
            flex-direction: column;
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
            color: #fff;
            padding:8px 30px;
            margin: 30px 0px;
            border-radius: 30px;
            transition: background 0.5s;
            background: #e8860e;
        }

        .btn-danger:hover {
            background: #ff8c00;
        }

    </style>


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
