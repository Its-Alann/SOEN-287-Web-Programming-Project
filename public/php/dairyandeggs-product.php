<?php
session_start();


$product_code = $_GET["code"];
$products = simplexml_load_file("../../product_info_test.xml");
foreach ($products->dairy_eggs_aisle->product as $product) {
    if ($product->code == $product_code) {
        $name = $product->name;
        $brand = $product->brand;
        $desc = $product->description;
        $price = $product->price;
        $weight = $product->weight;
        $extradesc = $product->extra_description;
        $cal = $product->calories;
        break;
    }
}


if (isset($_POST["product-qty-" . $product_code])) {
    $_SESSION["product-qty-cart-" . $product_code] = $_POST["product-qty-" . $product_code];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>McJawz | Dairy & Eggs |<?=$name?></title>
    <link rel="stylesheet" href="../../../public/css/bootstrap.css">
    <link rel="stylesheet" href="../../../public/css/allproducts.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="icon" href="../../../images/favicon.ico" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <script src = "../js/dairyandeggs-aisle.js"></script>
</head>

<body onload = 'setValues()'>

    <!-- Navbar -->

    <?php include('header.php'); ?>

    <!-- Subheader -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 title">
                <h2>Dairy & Eggs | <?=$name?> </h2>
            </div>
        </div>

        <div class="row">
          <div class="col-lg-6 aisles">
              <a href="../../../public/html/aisles/bakery.php">Bakery</a>
              |
              <a href="../../../public/html/aisles/beverages-aisle.php">Beverages</a>
              |
              <a href="../../../public/html/aisles/dairyandeggs-aisle.php">Dairy & Eggs</a>
              |
              <a href="../../../public/html/aisles/fruitsandveg-aisle.php">Fruits & Vegetables</a>
              |
              <a href="../../../public/html/aisles/poultry-aisle.php">Meat, Poultry & Fish</a>
              |
              <a href="../../../public/html/aisles/snack_aisle.php">Snacks</a>
            </div>

            <div class="col-lg-6 col-md-12 myCartContainer">
                <img class="shoppingcarticon" src="../../../images/shoppingcarticon.png" alt="">
                <a href="../../../public/html/cart.html">
                    <p>My Cart</p>
                </a>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="../../../images/product_<?=$product_code?>.jpg" class="card-img" alt="<?=$name?>">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><?=$name?></h5>
                  <p class="card-text"><?=$extradesc?></p>
                  <p class="card-text"><small class="text-muted"><?=$cal?></small></p>

                    <div class="row quantity">
                        <p class="pricing"><?=$price?>/each</p>
                        <div class="col-lg-12 incDecButton">
                            <span class="input-group-btn">
                                <button onclick="decrement('amount-<?=$product_code?>')" type="button" class="quantity-left-minus btn btn-danger btn-number"
                                    data-type="minus" data-field="">
                                  -
                                </button>
                            </span>
                            <input id = "amount-<?=$product_code?>" size="3" type="text" value="1">
                            <span class="input-group-btn">
                                <button onclick="increment('amount-<?=$product_code?>')" type="button" class="quantity-right-plus btn btn-success btn-number"
                                    data-type="plus" data-field="">
                                    +
                                </button>
                            </span>
                            <button type="button" class="btn btn-info">
                                <img class="shoppingcarticon" src="../../../images/shoppingcarticon.png" alt="">
                                    Add to cart
                            </button>
                        </div>
                    </div>

                </div>

                <div class="accordian">
                  <input type="checkbox" id="title1" />
                  <label onclick="showDescription()" for="title1">More Description</label>

                  <p id="description" style="display:none; padding-top: 10px">
                    <?=$description?>
                  </div>

            </div>
        </div>
    </div>

    <!-- Footer -->

    <?php include('footer.php'); ?>




</body>

</html>
