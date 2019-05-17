<?php
session_start();

$_SESSION["nome"] = $_POST["nome"] . "";
$_SESSION["login"] = $_POST["login"] . "";

setcookie("nome", $_POST["nome"] . "")

?>
<html>
    <head>
        <style>
            html{
                background-color: black;
                color:azure;
            }
            #tudo{
                text-align: center;
                
            }

            #centro{
                margin-top: 10%;
            }
        </style>
    </head>
<body>

<h1>Cadastrado com sucesso.</h1> <br>
<h2> <a href='index.php'>Voltar ao Inicio</a>

</body>
</html>