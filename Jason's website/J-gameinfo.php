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
    <link rel="stylesheet" href="jgameinfo.css">
    <title>Info Bounce</title>
</head>
<body>
<?php
    include ("./include/nav.php");
?>
    <!---------Auteur: Jason Villerius---------->
<main>
<section id="jbgc">
  <h4>game controls</h4>
    <p>
     <- move paddle left <br>
     -> move paddle right</p>
     </section>
     <section id="jbgtxt">
        <h4>Bounce Goal</h4>
     <p>
     De doel van het spel is om te proberen zoveel mogelijk punten te halen. <br>
     <br>
     Met elke bounce tegen de muren wordt de bal sneller. <br>
     <br>
     Als de bal de onderkant raakt is het game over.
     </p>
     </section>
</main>
<?php
    include ("./include/footer.php");
?>
</body>
</html>