<?php
if (isset($_POST['send'])) {
    $requestData = [
        'name' => $_POST['name'],
        'age' => $_POST['age']
    ];
    $filePath = 'test.txt';
    if (file_exists($filePath)) {
        $data = unserialize(file_get_contents($filePath));
    }

    if (!$data) {
        $data = [];
    }
    array_push($data, $requestData);
    file_put_contents($filePath, serialize($data));
    header("Location: task8.php");
}
?>