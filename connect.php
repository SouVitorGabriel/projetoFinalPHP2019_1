<?php

$email = $_POST["email"];
$senha = $_POST["senha"];
$pontos = $_POST["pontos"];
$multi1 = $_POST["multi1"];
$multi2 = $_POST["multi2"];
$multi3 = $_POST["multi3"];

    function Conecta()
    {
        try
        {
            $conect = new PDO("mysql: host=localhost; dbname=dogeMiner;", "root", "");
        
            $conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conect;

            echo "Conectado com sucesso <br>";
        }
        catch (PDOException $error)
        {
            echo "Conexao falhou, erro: " . $error->getMessage();
        }
    }

    function SaveGame($conexao = null, $email = null, $senha = null, $pontos = null, $mult1 = null, $mult2 = null, $mult3 = null)
    {
        try
        {
            $sql = "SELECT id FROM Jogadores WHERE email = '$email' AND senha = '$senha'";

            $resultado = $conexao->query($sql);

            $n = count($resultado->fetchAll(PDO::FETCH_ASSOC));
            
            if ($n == 0)
            {
                try
                {
                    $sql = "INSERT INTO Jogadores(email, senha, pontos, mult1, mult2, mult3) 
                                VALUES ($email, $senha, $pontos, $mult1, $mult2, $mult3)";

                    $conexao->exec($sql);

                    echo "Informações adicionadas com sucesso<br>";
                }
                catch (PDOException $error)
                {
                    echo "Adicionar dados falhou, erro: " . $error->getMessage();
                }

            }
            else
            {
                try
                {
                    $sql = "UPDATE Jogadores SET pontos= '$pontos', mult1 = '$mult1', mult2 ='$mult2', mult3 = '$mult3' WHERE  WHERE email = '$email' AND senha = '$senha'";

                    $conexao->exec($sql);

                    echo "Informações Atualizadas com sucesso<br>";
                }
                catch (PDOException $error)
                {
                    echo "Adicionar dados falhou, erro: " . $error->getMessage();
                }
            }

            
        }
        catch (PDOException $error)
        {
            echo "Recuperar falhou, erro: " . $error->getMessage();
        }
    }

    $conexao = Conecta();
    
    SaveGame($conexao, 1,2,3,4,5,6); 
?>