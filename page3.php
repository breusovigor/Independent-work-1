<?php

session_start();
$_SESSION ['pages'] [] = $_SERVER['PHP_SELF'];
if (isset($_SESSION['pages'])) {
    echo 'And now you on /page3. Your visited page list' . '</br>';
    foreach ($_SESSION['pages'] as $page) {
        echo $page . '</br>';
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
<a href="page2.php">Back to page 2</a>
</body>
</html>
