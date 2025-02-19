var trending_fashion_zone_data = [
  {
      img: "https://cdn.shopclues.com/images/thumbnails/78529/200/200/123783677womensvnecksleevelesschiffonpromdress1500360679.jpg",
      name: "Westchic Plain Black Georg...",
      p1: "900",
      p2: "1299",
      p3: "437",
      dis: "66% off",
  },
  // ... other products
];

function createFashionElements() {
  trending_fashion_zone_data.forEach(function (item) {
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
      document.querySelector(".trending_fashion_zone").append(main_div);
  });
}

createFashionElements();