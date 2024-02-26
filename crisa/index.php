<!--вывести все товары-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .statya{
        background: grey;
        padding: 10px;
        border-radius: 10px;
        margin-bottom: 50px;
        margin-right: 50px;
        width: 300px;

    }
</style>

<body>

<a href="create.php">add new computer</a>
<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'computers';
$link = mysqli_connect($host, $user, $pass, $name);

$query = "SELECT * FROM computers";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

    foreach ($data as $elem): ?>
        <div class="statya">
            <a href="<?='snow.php?id='.$elem['id']?>"><?=$elem['names']?></a>
            <p><?=$elem['price']?></p>
            <img width="100%" src="<?='imgs/'.$elem['pictures']?>">
        </div>
    <?php endforeach;?>
</body>
</html>




































<!--<div class="wrapper">-->
<!--<div class="statya">-->
<!--    <a href="--><?//='snow.php?id='.$elem['id']?><!--">--><?//=$elem['name']?><!--</a>-->
<!--    <p>--><?//=$elem['price']?><!--</p>-->
<!--    <img width="100%" src="--><?//='../images/'.$elem['picture']?><!--">-->
<!--</div>-->