<?php
session_start();
if(isset($_SESSION['login'])) {
    echo "xahis edirik evvelce cixis edesiniz";
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
    <form method="POST" action="./server.php">
        <input type="email" name="email" id="">
        <input type="password" name="password" id="">
        <button>login</button>
    </form>
</body>
</html>