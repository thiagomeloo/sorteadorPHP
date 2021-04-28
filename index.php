<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="/styles/global.css">
  <link rel="stylesheet" href="/styles/header.css">
  <link rel="stylesheet" href="/styles/main.css">


  <title>Sorteador</title>

</head>

<body>

  <?php
  include("./model/Sorted.php");
  $valueMin = isset($_POST["valueMin"]) ? $_POST["valueMin"] : 1;
  $valueMax = isset($_POST["valueMax"]) ? $_POST["valueMax"] : 100;
  $sorted = new Sorted((int) $valueMin, (int) $valueMax);
  ?>

  <header class="headerContainer">

    <img src="./assets/loteria.svg" alt="Podcastr" />

    <p>O melhor para você sortear!</p>

    <form action="" method="post">
      <label for="valueMin">valor Min: </label>
      <input type="number" value="<?php echo $sorted->intervalMin; ?>" name="valueMin" id="valueMin">
      <label for="valueMax"> valor Max: </label>
      <input type="number" value="<?php echo $sorted->intervalMax; ?>" name="valueMax">
      <input type="submit" class="btnSortear" value="Sortear">
    </form>
  </header>

  <main class="mainContainer">
    <h4>Caso efetue o sorteio com os campos vazios, números negativos ou o intervalo <strong>min</strong> maior que o intervalo <strong>max</strong> será sorteado um número de 1 a 100.</h4>
    <?php
    echo "<h3>Numero Sorteado!</h3> \n ";
    echo "<h4> Intervalo de " . $sorted->intervalMin . " e " . $sorted->intervalMax . ".</h4>";
    echo "<h1>" . $sorted->sort() . "</h1>";
    ?>
  </main>



</body>

</html>