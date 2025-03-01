// Données des gadgets
var gadget_store_data = [
    {
      img: "images/gallery-2.jpg",
      name: "i7S TWS Twins Wireless In t...",
      p1: "de 2999",
      p2: "à 299",
      dis: "88% off",
    },
    {
      img: "images/gallery-3.jpg",
      name: "HBS-730 In the Ear Bluetoot...",
      p1: "de 2999",
      p2: "à 299",
      dis: "88% off",
    },
    {
      img: "images/gallery-1.jpg",
      name: "MTR MT310 Dual Sim Featu...",
      p1: "de 2999",
      p2: "à 299",
      dis: "88% off",
    },
  ];

  // Fonction pour créer les éléments d'affichage des gadgets
  function createGadgetElements() {
    // Sélectionne le conteneur où les gadgets doivent être ajoutés
    const gadgetsContainer = document.querySelector(".Your_Gadgets_Store");

    // Parcourt les données des gadgets
    gadget_store_data.forEach(function (item) {
      // Création du conteneur principal pour chaque gadget
      let mainDiv = document.createElement("div");
      mainDiv.classList.add("gadget-item"); // Ajout d'une classe pour le style (facultatif)

      // Création de l'image
      let img = document.createElement("img");
      img.src = item.img;
      img.alt = item.name; // Ajout d'un texte alternatif pour l'image

      // Création du nom du produit
      let name = document.createElement("p");
      name.innerText = item.name;
      name.classList.add("nameofpro"); // Classe pour le style

      // Création du conteneur des prix
      let priceDiv = document.createElement("div");
      priceDiv.classList.add("price_div"); // Classe pour le style

      // Création des prix individuels
      let p1 = document.createElement("p");
      p1.textContent = `${item.p1} FCFA`;

      let p2 = document.createElement("p");
      p2.textContent = `${item.p2} FCFA`;

      // Ajout des prix dans le conteneur de prix
      priceDiv.append(p1, p2);

      // Création du texte de la réduction
      let dis = document.createElement("p");
      dis.innerText = item.dis;
      dis.classList.add("discount"); // Classe pour le style

      // Ajout des éléments dans le conteneur principal
      mainDiv.append(img, name, priceDiv, dis);

      // Ajout du gadget dans le conteneur de gadgets
      gadgetsContainer.append(mainDiv);
    });
  }

  // Appel de la fonction pour afficher les éléments
  createGadgetElements();
