<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>McJawz | Order List </title>
    <link rel="stylesheet" href="../../public/css/bootstrap.css">
    <link rel="stylesheet" href="../../public/css/backstore.css">
    <link rel="icon" href="../../images/favicon.ico" type="image/x-icon" />
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="../html/index.html">
            <img style="margin-right: 5px;" class="icon-logo" src="../../images/mcJawz_logo_no_txt.png" width="40" height="40" alt="">
            McJawz
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../html/index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../html/signup.html">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../html/login.html">Log in</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="page-name">
        <div>
           Order List
        </div>
    </div>



    <div class="flex-wrapper">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 align-self-center mx-auto mt-5  mb-5">
          <div class="card text-center">
                <div class="card-header bg-dark text-white">
                    <h1>Create an order</h1>
                </div>
            </div>
        </div>
    </div>
            

    <div class="card-body my-auto ">
        <?php
            $xml = simplexml_load_file('order_info.xml');
            if(isset($_POST['submit'])){
                $xml = simplexml_load_file('../../order_info.xml');
                $currentAmount = $xml->amount;
                $newOrder = $xml -> order_list-> addChild("order");
                $newOrder = $xml ->addChild("user", $_POST['user']);
                $newOrder = $xml ->addChild("order_num", $_POST['order_num']);
                $newOrder = $xml ->addChild("orderList", $_POST['orderList']);

                $xml->amount = intval($currentAmount)+1;
                $xml->asXML("../../order_info.xml");
            }
        ?>

        <form action="" method = "POST">
            <input class="inputField" type="text" placeholder="User" name = "user">
            <input class="inputField" type="text" placeholder="Order Number" name = "order_num">
            <input class="inputField" type="text" placeholder="Order List" name = "orderList">

            <div class="formButtons">
                <input type="submit" name = "submit" value = "Submit" class="btn btn-primary mt-3 mb-3">
                <button type="button"  class="btn btn-danger mt-3 mb-3">Reset</button>
            </div>
        </form>
    </div>



    <div class="footer">
        <div class="footer-item ml-3">
            <a href="admin.html"><p>Admin</p></a>
        </div>
        <div class="footer-item mr-3">
            <p class="font-italic"></p>
        </div>
    </div>
</body>
</html>