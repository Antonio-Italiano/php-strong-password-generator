<?php
# CHOSEN NUMBER RECOVERY 
$psw_lenght = $_GET['psw-lenght'] ?? null;
// var_dump($psw_lengt);
// die();
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
  <div class="text-center py-5">
    <h1>Strong Password Generator</h1>  
    <h2 class="text-white">Genera una password sicura</h2>
  </div>
  <div class="result p-3 rounded mb-5">Nessun parametro valido inserito</div>
  <!-- FORM CREATED TO SEND PASSWORD LENGTH -->
  <form action="#" method="GET" class="p-4 bg-white">
    <div class="row">
      <div class="col-7 d-flex align-items-center">
        <label for="psw-lenght" class="form-label">Lunghezza password:</label>
      </div>
      <div class="col-3 d-flex align-items-center">
          <input value="<?= $psw_lenght ?>" type="number" id="psw-lenght" min="6" name="psw-lenght" class="form-control border border-2 border-secondary">
      </div>
      <div class="col-12 mt-5">
        <button class="btn btn-primary">Invia</button>
        <a href="index.php" class="btn btn-secondary">Anulla</a>
      </div>
    </div>
  </form>
  

</body>
</html>