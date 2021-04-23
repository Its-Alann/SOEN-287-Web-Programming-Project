<?php
session_start();
if (isset($_GET["code"])) {
    $code = $_GET["code"];
    $file = simplexml_load_file("../../user_info.xml");
    list($user) = $file->xpath("//user[./code='$code']");
    echo $user->firstName;
    unset($user[0]);
    echo "\n";
    echo $file->asXML("../../user_info.xml");
}

header("Location: ./user_list.php");
