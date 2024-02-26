<?php
//страница как сrеаtе в которой форма но изменяет(отправляем данные из формы на update.php)
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'computers';
$link = mysqli_connect($host, $user, $pass, $name);

$id = $_POST['id'];

$query = "SELECT * FROM computers WHERE id=$id";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$users = mysqli_fetch_assoc($result);
?>
<a href="index.php">На главную</a>
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
<style>
    form {
        width: 50%;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }

    h1 {
        font-size: 24px;
        margin-bottom: 10px;
        text-align: center;
    }

    label {
        font-weight: bold;
    }

    textarea, input[type="text"]  {
        width: 100%;
        height: 230px;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    input[type="button"]{

    }

    img {
        display: block;
        max-width: 100%;
        margin-top: 10px;
    }
</style>
<form action="update.php" method="POST" enctype="multipart/form-data">
    <h1><?php echo $users['names']; ?></h1>
    <p>
        <label for="description">Характеристики:</label>
        <textarea name="description" id="description"><?php echo $users['description']; ?></textarea>
        <label for="price">Ціна:</label>
        <input type="text" name="price" id="price" value="<?php echo $users['price']; ?>"> <br>
        <img src="<?php echo 'imgs/'.$users['pictures']; ?>" alt="Product Image">
        <input type="file" name="pictures">
    </p>
    <button>Сохранить изменения</button>
</form>

</body>
</html>

