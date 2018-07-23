

<?php
/*Задача 7:
Создайте в сессии массив для хранения всех посещенных страниц.
Выведите в цикле список всех посещенных страниц.*/
session_start();
$_SESSION['pages'][] = $_SERVER['PHP_SELF'];
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
<form action="page1.php" method="post">
    <p>In this moment you on /task7.php</p>
    <input type="submit" value="Next to Page1">
</form>
</body>
</html>

