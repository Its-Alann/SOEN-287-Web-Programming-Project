<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>McJawz | Bakery</title>
    <link rel="icon" href="../../../images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../../public/css/bootstrap.css">
    <link rel="stylesheet" href="../../public/css/fruitsandveg-aisle.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <script src="../../js/bakery-aisle.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body onload="updateValues()">

    <!-- Navbar -->
    <?php include('header.php'); ?>

    <!-- Subheader -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 title">
                <h2>Bakery</h2>
            </div>
        </div>

        <div class="row">
          <div class="col-lg-6 aisles">
              <a href="../../../public/html/aisles/bakery.html">Bakery</a>
              |
              <a href="../../../public/html/aisles/beverages-aisle.html">Beverages</a>
              |
              <a href="../../../public/html/aisles/dairyandeggs-aisle.html">Dairy & Eggs</a>
              |
              <a href="../../../public/html/aisles/fruitsandveg-aisle.html">Fruits & Vegetables</a>
              |
              <a href="../../../public/html/aisles/poultry-aisle.html">Meat, Poultry & Fish</a>
              |
              <a href="../../../public/html/aisles/snack_aisle.html">Snacks</a>
            </div>

            <div class="col-lg-6 col-md-12 myCartContainer">
                <img class="shoppingcarticon" src="../../../images/shoppingcarticon.png" alt="">
                <a href="../../../public/html/cart.html">
                    <p>My Cart</p>
                </a>
            </div>
        </div>
    </div>

    <!-- Items -->
    <div class="card-deck">

        <div class="row">
          <!--Item-->
            <div class="col-lg-3 col-md-4">

                <div class="card">
                    <a class="item-link" href="../../../public/html/products/bakery-frenchbaguette.html">
                        <img class="card-img-top" src="../../../images/baguette.jpg" alt="French Baguette">

                        <div class="card-body">
                            <h5 class="card-title">French Baguette</h5>
                            <p class="card-text">Freshly baked french style baguette.</p>
                            <p class="card-text"><small class="text-muted">900 cal/baguette</small></p>
                        </div>
                    </a>
                    <div class="card-footer">
                        <p class="pricing"><b>$2.99 ea.</b></p>

                        <div class="row quantity">
                            <div class="col-lg-12 incDecButton">
                                <span class="input-group-btn">
                                    <button type="button" class="quantity-left-minus btn btn-danger btn-number incdec"
                                        data-type="minus" data-field="" onclick="decrement('frenchBaguetteAmount')">
                                      -
                                    </button>
                                </span>
                                <input id="frenchBaguetteAmount" size="3" type="text" value="1">
                                <span class="input-group-btn">
                                    <button type="button" class="quantity-right-plus btn btn-success btn-number incdec"
                                        data-type="plus" data-field="" onclick="increment('frenchBaguetteAmount')">
                                        +
                                    </button>
                                </span>
                            </div>
                            <div class="col-lg-12 addToCart">
                                <button type="button" class="btn btn-info">Add to cart</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--Item-->
            <div class="col-lg-3 col-md-4">
                <div class="card">
                    <a class="item-link" href="../../../public/html/products/bakery-whitebread.html">
                        <img class="card-img-top" src="../../../images/gadoua_whitebread.jpg" alt="WhiteBread">
                        <div class="card-body">
                            <h5 class="card-title">Gadoua White Bread Loaf</h5>
                            <p class="card-text">A white bread loaf perfect for sandwiches.</p>
                            <p class="card-text"><small class="text-muted">105 cal/slice</small></p>
                        </div>
                    </a>
                    <div class="card-footer">
                        <p class="pricing"><b>$3.25 ea.</b></p>

                        <div class="row quantity">
                            <div class="col-lg-12 incDecButton">
                                <span class="input-group-btn">
                                    <button type="button" class="quantity-left-minus btn btn-danger btn-number incdec"
                                        data-type="minus" data-field="" onclick="decrement('whiteBreadAmount')">
                                      -
                                    </button>
                                </span>
                                <input id="whiteBreadAmount" size="3" type="text" value="1" >
                                <span class="input-group-btn">
                                    <button type="button" class="quantity-right-plus btn btn-success btn-number incdec"
                                        data-type="plus" data-field="" onclick="increment('whiteBreadAmount')">
                                        +
                                    </button>
                                </span>
                            </div>
                            <div class="col-lg-12 addToCart">
                                <button type="button" class="btn btn-info">Add to cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Item-->
            <div class="col-lg-3 col-md-4">
                <div class="card">
                    <a class="item-link" href="../../../public/html/products/bakery-wholewheatbread.html">
                        <img class="card-img-top" src="../../../images/gadoua_wholewheatbread.jpg" alt="Wholewheatbread">
                        <div class="card-body">
                            <h5 class="card-title">Gadoua Whole Wheat Bread Loaf</h5>
                            <p class="card-text">A whole wheat bread loaf perfect for sandwiches.</p>
                            <p class="card-text"><small class="text-muted">100 cal/slice</small></p>
                        </div>
                    </a>
                    <div class="card-footer">
                        <p class="pricing"><b>$3.25 ea.</b></p>

                        <div class="row quantity">
                            <div class="col-lg-12 incDecButton">
                                <span class="input-group-btn">
                                    <button type="button" class="quantity-left-minus btn btn-danger btn-number incdec"
                                        data-type="minus" data-field="" onclick="decrement('wholeWheatBreadAmount')">
                                        -
                                    </button>
                                </span>
                                <input id="wholeWheatBreadAmount" size="3" type="text" value="1">
                                <span class="input-group-btn">
                                    <button type="button" class="quantity-right-plus btn btn-success btn-number incdec"
                                        data-type="plus" data-field="" onclick="increment('wholeWheatBreadAmount')">
                                        +
                                    </button>
                                </span>
                            </div>
                            <div class="col-lg-12 addToCart">
                                <button type="button" class="btn btn-info">Add to cart</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!--Item-->
            <div class="col-lg-3 col-md-4">
                <div class="card">
                    <a class="item-link" href="../../../public/html/products/bakery-raisinbread.html">
                        <img class="card-img-top" src="../../../images/gadoua_raisinbread.jpg" alt="Raisinbread">
                        <div class="card-body">
                            <h5 class="card-title">Gadoua Raisin and Cinnamon Bread Loaf</h5>
                            <p class="card-text">Tasty brioche bread loaf packed with heartwarming flavors.</p>
                            <p class="card-text"><small class="text-muted">130 cal/slice</small></p>
                        </div>
                    </a>
                    <div class="card-footer">
                        <p class="pricing"><b>$3.39 ea.</b></p>

                        <div class="row quantity">
                            <div class="col-lg-12 incDecButton">
                                <span class="input-group-btn">
                                    <button type="button" class="quantity-left-minus btn btn-danger btn-number incdec"
                                        data-type="minus" data-field="" onclick="decrement('raisinBreadAmount')">
                                        -
                                    </button>
                                </span>
                                <input id="raisinBreadAmount" size="3" type="text" value="1" >
                                <span class="input-group-btn">
                                    <button type="button" class="quantity-right-plus btn btn-success btn-number incdec"
                                        data-type="plus" data-field="" onclick="increment('raisinBreadAmount')">
                                        +
                                    </button>
                                </span>
                            </div>
                            <div class="col-lg-12 addToCart">
                                <button type="button" class="btn btn-info">Add to cart</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--Item-->
            <div class="col-lg-3 col-md-4">
                <div class="card">
                    <a class="item-link" href="../../../public/html/products/bakery-croissant.html">
                        <img class="card-img-top" src="../../../images/croissant.png" alt="Croissant">
                        <div class="card-body">
                            <h5 class="card-title">Croissant</h5>
                            <p class="card-text">Freshly baked croissant, the perfect breakfast item.</p>
                            <p class="card-text"><small class="text-muted">280 cal/croissant</small></p>
                        </div>
                    </a>
                    <div class="card-footer">
                        <p class="pricing"><b>$0.99 ea.</b></p>

                        <div class="row quantity">
                            <div class="col-lg-12 incDecButton">
                                <span class="input-group-btn">
                                    <button type="button" class="quantity-left-minus btn btn-danger btn-number incdec"
                                        data-type="minus" data-field="" onclick="decrement('croissantAmount')">
                                        -
                                    </button>
                                </span>
                                <input id="croissantAmount" size="3" type="text" value="1">
                                <span class="input-group-btn">
                                    <button type="button" class="quantity-right-plus btn btn-success btn-number incdec"
                                        data-type="plus" data-field="" onclick="increment('croissantAmount')">
                                        +
                                    </button>
                                </span>
                            </div>
                            <div class="col-lg-12 addToCart">
                                <button type="button" class="btn btn-info">Add to cart</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--Item-->
            <div class="col-lg-3 col-md-4">
                <div class="card">
                    <a class="item-link" href="../../../public/html/products/bakery-bagel.html">
                        <img class="card-img-top" src="../../../images/st.viateur_bagel.jpg" alt="Bagels">
                        <div class="card-body">
                            <h5 class="card-title">St. Viateur Bagels</h5>
                            <p class="card-text">Classic St. Viateur taste, baked here in Montreal.</p>
                            <p class="card-text"><small class="text-muted">240 cal/bagel</small></p>
                        </div>
                    </a>
                    <div class="card-footer">
                        <p class="pricing"><b>$11.25/dozen</b></p>

                        <div class="row quantity">
                            <div class="col-lg-12 incDecButton">
                                <span class="input-group-btn">
                                    <button type="button" class="quantity-left-minus btn btn-danger btn-number incdec"
                                        data-type="minus" data-field="" onclick="decrement('bagelAmount')">
                                        -
                                    </button>
                                </span>
                                <input id="bagelAmount" size="3" type="text" value="1" >
                                <span class="input-group-btn">
                                    <button type="button" class="quantity-right-plus btn btn-success btn-number incdec"
                                        data-type="plus" data-field="" onclick="increment('bagelAmount')">
                                        +
                                    </button>
                                </span>
                            </div>
                            <div class="col-lg-12 addToCart">
                                <button type="button" class="btn btn-info">Add to cart</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--Item-->
            <div class="col-lg-3 col-md-4">
                <div class="card">
                    <a class="item-link" href="../../../public/html/products/bakery-chocolatine.html">
                        <img class="card-img-top" src="../../../images/chocolatine.png" alt="Chocolatine">
                        <div class="card-body">
                            <h5 class="card-title">Chocolatine</h5>
                            <p class="card-text">Freshly baked chocolatine from the current morning.</p>
                            <p class="card-text"><small class="text-muted">300 cal/chocolatine</small></p>
                        </div>
                    </a>
                    <div class="card-footer">
                        <p class="pricing"><b>$0.99 ea.</b></p>

                        <div class="row quantity">
                            <div class="col-lg-12 incDecButton">
                                <span class="input-group-btn">
                                    <button type="button" class="quantity-left-minus btn btn-danger btn-number incdec"
                                        data-type="minus" data-field="" onclick="decrement('chocolatineAmount')">
                                        -
                                    </button>
                                </span>
                                <input id="chocolatineAmount" size="3" type="text" value="1" >
                                <span class="input-group-btn">
                                    <button type="button" class="quantity-right-plus btn btn-success btn-number incdec"
                                        data-type="plus" data-field="" onclick="increment('chocolatineAmount')">
                                        +
                                    </button>
                                </span>
                            </div>
                            <div class="col-lg-12 addToCart">
                                <button type="button" class="btn btn-info">Add to cart</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--Item-->
            <div class="col-lg-3 col-md-4">
                <div class="card">
                    <a class="item-link" href="../../../public/html/products/bakery-chocolatecake.html">
                        <img class="card-img-top" src="../../../images/chocolatecake.png" alt="Chocolate Cake">
                        <div class="card-body">
                            <h5 class="card-title">Triple Chocolate Cake</h5>
                            <p class="card-text">Delicious triple chocolate cake made from our own secret recipe.</p>
                            <p class="card-text"><small class="text-muted">300 cal/serving</small></p>
                        </div>
                    </a>
                    <div class="card-footer">
                        <p class="pricing"><b>$12.99 ea.</b></p>

                        <div class="row quantity">
                            <div class="col-lg-12 incDecButton">
                                <span class="input-group-btn">
                                    <button type="button" class="quantity-left-minus btn btn-danger btn-number incdec"
                                        data-type="minus" data-field="" onclick="decrement('chocolateCakeAmount')">
                                        -
                                    </button>
                                </span>
                                <input id="chocolateCakeAmount" size="3" type="text" value="1">
                                <span class="input-group-btn">
                                    <button type="button" class="quantity-right-plus btn btn-success btn-number incdec"
                                        data-type="plus" data-field="" onclick="increment('chocolateCakeAmount')">
                                        +
                                    </button>
                                </span>
                            </div>
                            <div class="col-lg-12 addToCart">
                                <button type="button" class="btn btn-info">Add to cart</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="footer-text">
            <a href="../admin.html">Admin</a>
        </div>
    </div>


</body>


</html>
