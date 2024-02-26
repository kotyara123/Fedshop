<?php
//вывести форму для создания товароов
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form enctype="multipart/form-data" action="/computers/store.php" method="POST">
    <input placeholder="name" name="names">
    <input placeholder="price" name="price">
    <input placeholder="description" name="description">
    <input type="file" name="pictures">
    <input type="submit">
</form>
</body>
</html>
