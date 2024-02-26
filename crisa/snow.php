<a href="index.php">Вернуться на главную</a>
//выводим детал инф товара по айди
<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'computers';
$link = mysqli_connect($host, $user, $pass, $name);

$id = $_GET['id'];

$query = "SELECT * FROM computers WHERE id=$id";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$users = mysqli_fetch_assoc($result);

?>
<div>
    <h1><?= $users['names'] ?></h1>
    <p>
        name: <span><?= $users['names'] ?></span> <br>
        description: <pre><?= $users['description'] ?></pre> <br>
        price: <span ><?= $users['price'] ?></span> <br>
        <img  src="<?='imgs/'.$users['pictures']?>">
    </p>
</div>
<form action="edit.php" method="post">
    <input type="text" name="id" value="<?= $users['id'] ?>"hidden>
    <button type="submit">Редактировать</button>
</form>

