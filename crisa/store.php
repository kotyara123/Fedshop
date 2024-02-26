<?php
////отправляем данные на БД из createe.php
//echo '<pre>'.print_r($_FILES, 1).'</pre>';
move_uploaded_file($_FILES['pictures']['tmp_name'], "imgs/".$_FILES['pictures']['img_name']);

$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'computers';
$link = mysqli_connect($host, $user, $pass, $name);

$computerName = $_POST['names'];
$computerDescription = $_POST['description'];
$computerPrice = $_POST['price'];
$computerPicture ="imgs/".$_FILES['pictures']['img_name'];
$query = "INSERT INTO computers (names, description, price, pictures) VALUES ('$computerName', '$computerDescription', '$computerPrice', '$computerPicture')";



?>
<a href="index.php">На главную</a>
