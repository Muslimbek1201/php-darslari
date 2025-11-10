<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $ism = $_POST['ism'];
    $familiya = $_POST['familiya'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><?= $ism  ?></li>
        <li><?= $familiya  ?></li>
    </ul>
</body>
</html>