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

    $a=$_POST['email'];
    $b=$_POST['password']
    include 'dbconfig.php';
    $sql="SELECT * FROM img where email=$a and password=$b";
    $data=mysqli_query($db,$sql);
    $result=mysqli_fetch_array($data);
   
    <img src="data:image/png;base64,'.base64_encode($result['image']).'"/>;


?>
</body>
</html>