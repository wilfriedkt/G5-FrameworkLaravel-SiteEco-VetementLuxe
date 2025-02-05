var gadget_store_data = [
  {
    img: "./images/buy-1.jpg",
    name: "i7S TWS Twins Wireless In t...",
    p1: "379",
    p2: "2999",
    p3: "342",
    dis: "88% off",
  },
  {
    img: "images/buy-1.jpg",
    name: "HBS-730 In the Ear Bluetoot...",
    p1: "329",
    p2: "1099",
    p3: "294",
    dis: "73% off",
  },
  {
    img: "",
    name: "MTR MT310 Dual Sim Featu...",
    p1: "749",
    p2: "999",
    p3: "693",
    dis: "30% off",
  },
  {
    img: "",
    name: "Innotek Mini K1 Universal W...",
    p1: "149",
    p2: "599",
    p3: "123",
    dis: "79% off",
  },
  {
    img: "",
    name: "Refurbished Nokia 1100 Bla...",
    p1: "1199",
    p2: "1999",
    p3: "1045",
    dis: "47% off",
  },
  {
    img: "",
    name: "Innotek Mini K1 Universal W...",
    p1: "149",
    p2: "599",
    p3: "123",
    dis: "79% off",
  },
  {
    img: "",
    name: "Refurbished Nokia 1100 Bla...",
    p1: "1199",
    p2: "1999",
    p3: "1045",
    dis: "47% off",
  },
  {
    img: "",
    name: "Raptech Compatible Micro...",
    p1: "189",
    p2: "999",
    p3: "161",
    dis: "83% off",
  },
  {
    img: "",
    name: "3 meter long Universal mobi...",
    p1: "179",
    p2: "799",
    p3: "158",
    dis: "80% off",
  },
];

gadget_store_data.map(function (data) {
  let main_div = document.createElement("div");

  let img = document.createElement("img");
  img.src = data.img;

  let name = document.createElement("p");
  name.innerText = data.name;
  name.setAttribute("class", "nameofpro");

  let price_div = document.createElement("div");

  let p1 = document.createElement("p");
  p1.textContent = `₹${data.p1}`;

  let p2 = document.createElement("p");
  p2.textContent = `₹${data.p2}`;

  let p3 = document.createElement("p");
  p3.textContent = `₹${data.p3}`;

  price_div.append(p1, p2, p3);
  price_div.setAttribute("class", "price_div");

  let dis = document.createElement("p");
  dis.innerText = data.dis;
  dis.setAttribute("id", "price_divplusp");
  main_div.append(img, name, price_div, dis);
  document.querySelector(".Your_Gadgets_Store").append(main_div);
});
