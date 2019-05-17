<?php
    session_start();
?>
<html lang="pt-br">
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
<?php
    if(!isset($_COOKIE["nome"]))
    {
        print_r($_COOKIE);
        echo "<div id='tudo'><div id='centro'><h2>Bem-vindo, visitante</h2><br>
            Por favor faça login <a href='cadastro.html'>clicando aqui</a>

            
            </div></div>";
    }
    else{
        print_r($_COOKIE);
        echo "<div id='tudo'><div id='centro'><h2>Bem-vindo, " . $_COOKIE["nome"] . "</h2><br>
            Por favor faça login <a href='cadastro.html'>clicando aqui</a>";
    }
?>

</body>
</html>

