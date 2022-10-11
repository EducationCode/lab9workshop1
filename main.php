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
    $lang = $_COOKIE["lang"];
    if($lang == 'en'){
        echo"Welcome";
    }
    else if ($lang == 'th'){
        echo"ยินดีต้อรับ";
    }
    ?>
</body>
</html>