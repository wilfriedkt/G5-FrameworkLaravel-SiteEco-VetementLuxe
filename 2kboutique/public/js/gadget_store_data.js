var gadget_store_data = [
  {
      img: "https://cdn.shopclues.com/images1/thumbnails/99370/200/200/145508146-99370521-1634810951.jpg",
      name: "i7S TWS Twins Wireless In t...",
      p1: "379",
      p2: "2999",
      p3: "342",
      dis: "88% off",
  },
  {
    img: "https://cdn.shopclues.com/images1/thumbnails/95357/200/200/142826933-95357827-1606398228.jpg",
    name: "HBS-730 In the Ear Bluetoot...",
    p1: "329",
    p2: "1099",
    p3: "294",
    dis: "73% off",
  },
  {
    img: "https://cdn.shopclues.com/images1/thumbnails/81476/200/200/135627858-81476269-1619845151.jpg",
    name: "MTR MT310 Dual Sim Featu...",
    p1: "749",
    p2: "999",
    p3: "693",
    dis: "30% off",
  },
];

function createGadgetElements() {
  gadget_store_data.forEach(function (item) {
      let main_div = document.createElement("div");

      let img = document.createElement("img");
      img.src = item.img;

      let name = document.createElement("p");
      name.innerText = item.name;
      name.setAttribute("class", "nameofpro");

      let price_div = document.createElement("div");
      price_div.setAttribute("class", "price_div");

      let p1 = document.createElement("p");
      p1.textContent = `${item.p1}FCFA`;

      let p2 = document.createElement("p");
      p2.textContent = `${item.p2}FCFA`;

      let p3 = document.createElement("p");
      p3.textContent = `${item.p3}FCFA`;

      price_div.append(p1, p2, p3);

      let dis = document.createElement("p");
      dis.innerText = item.dis;
      dis.setAttribute("id", "price_divplusp");

      main_div.append(img, name, price_div, dis);
      document.querySelector(".Your_Gadgets_Store").append(main_div);
  });
}

createGadgetElements();