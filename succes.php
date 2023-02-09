<?php
session_start();
if (empty($_SESSION['password'])){
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>PHP Strong Password Generator</title>
</head>
<body class="container w-50 pt-5">
    <div class="result p-3 rounded mb-5">La password è: <?= $_SESSION['password'] ?> </div>
    <a href="index.php" class="btn btn-secondary">Ricalcola</a>
</body>
</html>