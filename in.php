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
    
    include 'dbconfig.php';
    echo "Hi";
    
    $a= $_POST["name"];
    $b= $_POST["email"];
    $c= $_POST["password"];
    $filename = $_FILES["file"]["name"];
    $sql = "INSERT INTO img (name,email,password,img) VALUES ('$a,$b,$c,$filename)"; 
    ?>
</body>
</html>