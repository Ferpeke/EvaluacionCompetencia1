<!DOCTYPE html>
<html lang='es'>
  <head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, shrink-to-fit=no'>
    <title>Pagina</title>

    <?php require_once 'app/config.php';?>
    <?php require_once 'app/dependencias.php';?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.seanhalpin.design/css/main.css">
  </head>
  
  <body class="color-body">
    <?php

      require_once 'view/navbar.php';
      require_once 'view/Container.php';
      
    ?>  
    
  <script src="https://cdn.jsdelivr.net/npm/animejs@3.0.1/lib/anime.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.1.2/dist/lazyload.min.js"></script>
  <script src="https://www.seanhalpin.design/js/scripts.js"></script>
  </body>
</html>