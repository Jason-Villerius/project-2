<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="./img/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="./include/styleMenu.css">
    <link rel="stylesheet" href="stylesheets.css">
    <link rel="stylesheet" href="Bounce.css">
    <title>Bounce</title>
</head>
<body>
<?php
    include ("./include/nav.php");
?>
    <!---------Auteur: Jason Villerius---------->
<main>
  <section id="jbg">
  <h2 id="bounce">Bounce</h2>
<button id="startButton">Start game</button>
  <div id="game-container">
  <div id="score">Score: 0</div>
  <div id="hscore">HighScore: 0</div>
    <div id="ball"></div>
    <div id="paddle"></div>
  </div>
  </section>
  <script src="Bounce.js"></script>
</main>
<?php
    include ("./include/footer.php");
?>
</body>
</html>