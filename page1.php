<?php
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
<form action="page2.php" method="post">
    <p>In this moment you on /page1.php</p>
    <input type="submit" value="Next to Page2">
</form>
<a href="task7.php">Back to main page</a>
</body>
</html>