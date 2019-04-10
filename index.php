<!DOCTYPE html>
<html>
  <head>

  <?php

    if (!empty($_GET['email']) && !empty($_GET['senha']) && !empty($_GET['pontos']) && !empty($_GET['multi1']) && !empty($_GET['multi2']) && !empty($_GET['multi3']))
    {
        $email = $_GET["email"];
        $senha = $_GET["senha"];
        $pontos = $_GET["pontos"];
        $multi1 = $_GET["multi1"];
        $multi2 = $_GET["multi2"];
        $multi3 = $_GET["multi3"];
    }
    else
    {
        $email = "nada";
        $senha = "";
        $pontos = 0;
        $multi1 = 1;
        $multi2 = 1;
        $multi3 = 1;
    }

  ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Página Inicial</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
   
    <style>
    body{
      background-color: black;
    }
    canvas{
      border: 2px dashed white;
    }
    #game_container{
      text-align: center;
    }
    
    </style>
  </head>
  <body>
  <input type="hidden" id="email" name="email" value="<?php echo $email ?>">
  <input type="hidden" id="senha" name="senha" value="<?php echo $senha ?>">
  <input type="hidden" id="pontos" name="pontos" value="<?php echo $pontos ?>">
  <input type="hidden" id="multi1" name="multi1" value="<?php echo $multi1 ?>">
  <input type="hidden" id="multi2" name="multi2" value="<?php echo $multi2 ?>">
  <input type="hidden" id="multi3" name="multi3" value="<?php echo $multi3 ?>">
    
    <div id="container">
      <div id="game_container">
        <canvas id="jogo" height="432px" width="768px">se o navegador não interpreta canvas, esse texto de erro aparece</canvas>  
      </div>
      
    </div>
    
  </body>
  <script src="js/main.js"></script>
</html>