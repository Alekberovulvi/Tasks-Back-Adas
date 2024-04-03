<?php
    session_start();
    if(!isset($_SESSION['login'])) {
        echo "xahis edirik evvelce daxil olasiniz"; 
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ana sehife</h1>
    <a href="./logout.php">cixis et</a>
</body>
</html>