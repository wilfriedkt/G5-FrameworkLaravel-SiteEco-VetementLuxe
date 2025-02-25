// Données de la zone de mode tendance
var trending_fashion_zone_data = [
    {
      img: "https://cdn.shopclues.com/images/thumbnails/78529/200/200/123783677womensvnecksleevelesschiffonpromdress1500360679.jpg",
      name: "Westchic Plain Black Georg...",
      p1: "de 900",
      p2: "à 437",
      dis: "66% off",
    },
    // Ajouter d'autres produits ici
];

// Fonction pour créer les éléments d'affichage des produits de mode tendance
function createFashionElements() {
    // Sélectionne le conteneur où les produits de mode tendance doivent être ajoutés
    const fashionContainer = document.querySelector(".trending_fashion_zone");

    // Parcourt les données des produits de mode tendance
    trending_fashion_zone_data.forEach(function (item) {
      // Création du conteneur principal pour chaque produit
      let mainDiv = document.createElement("div");
      mainDiv.classList.add("fashion-item"); // Classe pour le style (facultatif)

      // Création de l'image du produit
      let img = document.createElement("img");
      img.src = item.img;
      img.alt = item.name; // Ajout du texte alternatif pour l'image
      img.classList.add("fashion-item-img"); // Classe pour l'image

      // Création du nom du produit
      let name = document.createElement("p");
      name.innerText = item.name;
      name.classList.add("fashion-item-name"); // Classe pour le style

      // Création du conteneur des prix
      let priceDiv = document.createElement("div");
      priceDiv.classList.add("fashion-price-div"); // Classe pour le style

      // Création des prix individuels
      let p1 = document.createElement("p");
      p1.textContent = `${item.p1} FCFA`;
      p1.classList.add("fashion-price-original"); // Classe pour prix initial



      let p2 = document.createElement("p");
      p2.textContent = `${item.p2} FCFA`;
      p2.classList.add("fashion-price-final"); // Classe pour prix final

      // Ajout des prix dans le conteneur de prix
      priceDiv.append(p1, p2);

      // Création du texte de la réduction
      let dis = document.createElement("p");
      dis.innerText = item.dis;
      dis.classList.add("fashion-discount"); // Classe pour le style

      // Ajout des éléments dans le conteneur principal
      mainDiv.append(img, name, priceDiv, dis);

      // Ajout du produit de mode tendance dans le conteneur
      fashionContainer.append(mainDiv);
    });
}

// Appel de la fonction pour afficher les éléments
createFashionElements();
