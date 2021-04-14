<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>McJawz | Sign Up </title>
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
           Sign Up
        </div>
    </div>



    <div class="flex-wrapper">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 align-self-center mx-auto mt-5  mb-5">
          <div class="card text-center">
                  <div class="card-header bg-dark text-white">
                      <h1>Create an account</h1></div>

          <div class="card-body my-auto ">
            <?php
            if(isset($_POST['submit'])){//The user pushed the submit button
              $xml = simplexml_load_file("../../user_info.xml");//Loading XML file in an object
              $currentAmount = $xml->amount;
              $newUser = $xml->userList->addChild("user");
              $newUser->addChild("code", $currentAmount);
              $newUser->addChild("firstName", $_POST['firstName']);
              $newUser->addChild("lastName", $_POST['lastName']);
              $newUser->addChild("email", $_POST['email']);
              $newUser->addChild("password", $_POST['password']);
              $newUser->addChild("address", $_POST['address']);
              $newUser->addChild("city", $_POST['city']);
              $newUser->addChild("stateOrProvince", $_POST['stateOrProvince']);
              $newUser->addChild("postalCode", $_POST['postalCode']);

              $xml->amount = intval($currentAmount)+1;//Increasing the amount value in XML
              $xml->asXML("../../user_info.xml");//Saving to XML file
            }
             ?>
            <form action="" method = "POST">
              <input class="inputField" type="text" placeholder="First Name" name = "firstName">
              <input class="inputField" type="text" placeholder="Last Name" name = "lastName">
              <input class="inputField" type="text" placeholder="Address" name = "address">
              <input class="inputField" type="text" placeholder="City" name = "city">
              <input class="inputField" type="text" placeholder="State/Province" name = "stateOrProvince">
              <input class="inputField" type="text" placeholder="Postal Code" name = "postalCode">
                <input class="inputField" type="text" placeholder="Email" name = "email">
                <input class="inputField" type="text" placeholder="Confirm Email">
                <input class="inputField " type="password" placeholder="Create Password" name = "password">
                <input class="inputField " type="password" placeholder="Confirm Password">
                <div class="formButtons">
                    <input type="submit" name = "submit" value = "Submit" class="btn btn-primary mt-3 mb-3">
                    <button type="button"  class="btn btn-danger mt-3 mb-3">Reset</button>
                </div>
            </form></div>
            <div class="card-footer bg-dark">
                <h6>Already have an account? <a class="clickhere" href="../html/login.html"> Click here to login</a></h6>
              </div>
          </div>
        </div>
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
