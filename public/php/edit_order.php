<!DOCTYPE html>
<?php
    if(isset($_POST['edit'])){
        $xml = new DomDocument();
        $xml->load('order_info.xml');

        #del order
        $orderNum = $_POST['order_num'];

        $xpath = new DOMXPath($xml);

        foreach($xpath -> query("/order_list/order[order_num = '$orderNum']") as $node){
            $node->parentNode->removeChild($node);

        }
        $xml -> formatoutput = true;
        $xml -> save('order_info.xml');

        #add order
        $newUser = $_POST['user'];
        $newOrderNum = $_POST['order_num'];
        $newOrderList = $_POST['orderList'];

        $rootTag = $xml -> getElementsByTagname('order_list') -> item(0);

        $infoTag = $xml -> createElement("order");
            $userTag = $xml -> createElement("user", $newUser);
            $orderNumTag = $xml -> createElement("order_num", $newOrderNum);
            $orderListTag = $xml -> createElement("orderList", $newOrderList);

            $infoTag ->appendChild($userTag);
            $infoTag ->appendChild($orderNumTag);
            $infoTag ->appendChild($orderListTag);

        $rootTag -> appendChild($infoTag);
        $xml->save('order_info.xml');
    }
    
?>



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
                    <h1>Edit an order</h1>
                </div>
            </div>
        </div>
    </div>

    <form method = "POST" action = "edit_order.php">
        Please select order number wished to be edited<input type = "text" name = "order_num"></br>
        Please enter the user's name <input type = "text" name = "user"></br>
        Please enter the new order list <input type = "text" name = "orderList" class = "mt-5 mb-5"></br>
        <input type="submit" name = "edit" value = "Edit" class="btn btn-primary mt-3 mb-3">
        <button type="button"  class="btn btn-danger mt-3 mb-3">Reset</button>
    </form>
            




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