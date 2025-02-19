<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pour les Femmes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        .product-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        .product {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 200px;
            margin: 10px;
            padding: 10px;
            text-align: center;
            transition: transform 0.2s;
        }
        .product:hover {
            transform: scale(1.05);
        }
        .price {
            color: green;
            font-weight: bold;
        }
        .discount {
            color: red;
        }
    </style>
</head>
<body>

<h1>Pour les Femmes</h1>

<div class="product-container">
    <div class="product">
        <img src="image1.jpg" alt="Produit Femme 1" style="width:100%">
        <h2>Produit Femme 1</h2>
        <p class="price">₹399</p>
        <p class="discount">80% off</p>
    </div>
    <div class="product">
        <img src="image2.jpg" alt="Produit Femme 2" style="width:100%">
        <h2>Produit Femme 2</h2>
        <p class="price">₹599</p>
        <p class="discount">50% off</p>
    </div>
    <div class="product">
        <img src="image3.jpg" alt="Produit Femme 3" style="width:100%">
        <h2>Produit Femme 3</h2>
        <p class="price">₹499</p>
        <p class="discount">70% off</p>
    </div>
    <div class="product">
        <img src="image4.jpg" alt="Produit Femme 4" style="width:100%">
        <h2>Produit Femme 4</h2>
        <p class="price">₹299</p>
        <p class="discount">60% off</p>
    </div>
    <div class="product">
        <img src="image5.jpg" alt="Produit Femme 5" style="width:100%">
        <h2>Produit Femme 5</h2>
        <p class="price">₹1599</p>
        <p class="discount">30% off</p>
    </div>
</div>

</body>
</html>