<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if(empty($_COOKIE["visit"])){
    setcookie("visit",0 , time()+ 1 * 1);
}


if(!isset($_COOKIE["visit"])){
    echo"Welcome to my website click here for a tour";
}else{
    $visit = $_COOKIE["visit"] +1 ;
    setcookie("visit", $visit, time()+ 1 * 1);
    echo"This is visit number $visit.";
}



?>
    
</body>
</html>