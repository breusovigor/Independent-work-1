

<?php
/* Задача 8:
Создайте файл 'test.txt' и запишите в него массив ['name' => 'Your name', 'age' => 'Your age'].
Считайте данные из файла 'test.txt' и выведите их на экран.*/
include 'filelogic.php';
$filePath = 'test.txt';
$data = unserialize(file_get_contents($filePath));
if ($data) {
    foreach ($data as $value) {
        echo 'My name: ' . $value['name'] . ' My age: ' . $value['age'];
    }
}
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
<form action="filelogic.php" method="post">
    <p>Name <input type="text" name="name"</p>
    <p>Age <input type="text" name="age"/></p>
    <input type="submit" name="send" value="Send">
</form>
</body>
</html>