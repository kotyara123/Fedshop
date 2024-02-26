<?php
//получаем данные из едит и обновляем данные на БД по айди
//echo '<pre>'.print_r($_FILES, 1).'</pre>';
move_uploaded_file($_FILES['pictures']['tmp_name'], "imgs2/".$_FILES['pictures']['name']);

$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'computers';
$link = mysqli_connect($host, $user, $pass, $name);

$computerName = $_POST['names'];
$computerDescription = $_POST['description'];
$computerPrice = $_POST['price'];
$computerPictures = "imgs2/". $_FILES['pictures']['name'];
$query = "UPDATE computers SET (name, description, price, pictures) VALUES ('$computerName', '$computerDescription', '$computerPrice', '$computerPictures')";


?>
<a href="index.php">На главную</a>


<?php
//if(isset($_POST['submit'])) {
//    $host = 'localhost';
//    $user = 'root';
//    $pass = '';
//    $name = 'computers';
//    $link = mysqli_connect($host, $user, $pass, $name);
//
//    // Проверяем наличие данных в массивах $_POST и $_FILES
//    if(isset($_POST['name'], $_POST['description'], $_POST['price'], $_FILES['pictures'])) {
//        $computerName = $_POST['name'];
//        $computerDescription = $_POST['description'];
//        $computerPrice = $_POST['price'];
//
//        // Перемещаем загруженный файл в нужную папку
//        $targetDirectory = "imgs2/";
//        $targetFile = $targetDirectory . basename($_FILES['pictures']['name']);
//        move_uploaded_file($_FILES['pictures']['tmp_name'], $targetFile);
//
//        // Обновляем данные в базе данных
//        $computerPictures = "imgs2/" . $_FILES['pictures']['name'];
//        $query = "UPDATE computers SET description='$computerDescription', price='$computerPrice', pictures='$computerPictures' WHERE name='$computerName'";
//        $result = mysqli_query($link, $query);
//
//        if($result) {
//            echo "Данные успешно обновлены!";
//        } else {
//            echo "Ошибка при обновлении данных: " . mysqli_error($link);
//        }
//
//
//
//        // Проверяем успешность выполнения запроса
//        if($result) {
//            echo "Данные успешно обновлены!";
//        } else {
//            echo "Ошибка при обновлении данных: " . mysqli_error($link);
//        }
//
//        // Закрываем соединение с базой данных
//        mysqli_close($link);
//    } else {
//        echo "Ошибка: Не все данные были отправлены!";
//    }
//}
//
//?>
<!--<a href="index.php">На главную</a>-->
