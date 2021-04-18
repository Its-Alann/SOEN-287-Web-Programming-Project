<?php session_start();?>
<?php
if(isset($_POST['delete'])){
$number=$_POST['delete'];
   echo $number;


    $xml = simplexml_load_file("C:\Users\cpang\Desktop\SOEN-287-main\product_info.xml");

    foreach($xml->children() as $child){
        foreach($child->product as $item){
        if ($item->code==$number){
            unset($item->item);
            unset($xml->item);
            unset($item->code);
            unset($item->name);
            unset($item->weight);
            unset($item->brand);
            unset($item->price);
            unset($item->description);
            unset($item->description2);
            unset($item->quantity);
    
        break;
        echo "-----------------------------------------";
            }
    }}
    file_put_contents("C:\Users\cpang\Desktop\SOEN-287-main\product_info.xml",$xml->saveXML());}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/backstore.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>McJawz | Product List</title>
    <link rel="icon" href="../../images/favicon.ico" type="image/x-icon" />
    <script src="../../../public/js/poultry-aisle.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

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

<section class="page-name">
    <div>
       Product List
    </div>
</section>

<body onload="updateAllValues()">

<?php
$xml = simplexml_load_file("C:\Users\cpang\Desktop\SOEN-287-main\product_info.xml");
foreach($xml->children()as $aisle){
foreach($aisle-> product as $item){
    if($item->code==""){
    continue;
    }
    $code= (int)$item->code;
    $name=$item->name;
    $weight=$item->weight;
    $brand=$item->brand;
    $price=$item->price;
    $quantity=(int)$item->quantity;
    ?>


<div class=backstore-p7>
 <div class="row mt-2">
      <div class="card-body col-xl-4 col-lg-6 col-md-6 col-sm-6">
        <img src="../../images/<?=$code?>.png" class="img-fluid " style="background-color: white;" alt="<?= $name?>">
      </div> 
      <div class="col-xl-8 col-lg-6 col-md-6 col-sm-6 align-self-center " id="productCC">
        <div class="card text-center">
                <div class="card-header bg-dark text-white">
                    <h1><?=$name?></h1></div>
        <div class="card-body my-auto ">
                <div class="col-xl-8 col-lg-8 col-md-8 align-self-center">
                    <h5 class="card-title d-inline">Price: $<?= $price?></h5>
                    <h6 class="card-title">Quantity Remaining: <?= $quantity?></h6>
                    <span class="input-group-btn">
                      <button onclick="decrement('amount-<?=$code?>');" class="quantity-left-minus btn btn-danger btn-number"
                          data-type="minus" data-field="">-
                      </button></span>
                  <input id='amount-<?=$code?>' size="3" type="text" value="0">
                  <span class="input-group-btn">
                  <button onclick="increment('amount-<?=$code?>');" type="button" class="quantity-right-plus btn btn-success btn-number"
                          data-type="plus" data-field="">+
</button>                </span>
               

        <a href="edit_product.php?add_product=true" class="btn btn-dark btn-md mt-2 d-block">Add</a>
        <a href="edit_product.php" class="btn btn-dark btn-md mt-2 d-block">Edit</a>
        <form action="" method="post">
        <button onclick="submit();"class="btn btn-danger btn-md mt-2 btn-block">Delete</button>
        <input type="hidden" name="delete" value=<?=$code?> >
</form>
    


            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php }}?>
</body>
<section class="footer">
    <div class="footer-item ml-3">
        <a href="../html/admin.html"><p>Admin</p></a>
    </div>
    <div class="footer-item mr-3">
        <p class="font-italic"></p>
    </div>
</section>
    </body>
</html>

