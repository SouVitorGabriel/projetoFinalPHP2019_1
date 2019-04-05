<?php
    //verificação de BD na máquina
    print_r(PDO::getAvailableDrivers());

    try
    {
        $conexao = new PDO("mysql: host=localhost; dbname=dogeminer;", "root", "");
    
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "Conectado com sucesso <br>";
    }
    catch (PDOException $error)
    {
        echo "Conexao falhou, erro: " . $error->getMessage();
    }


   /*  try
    {
        $sql = "SELECT sobrenome, id, nome FROM Jogadores WHERE id = 4";

        $resultado = $conexao->query($sql);

        while ($linha = $resultado->fetch(PDO::FETCH_OBJ))
        {
            echo "ID: $linha->id nome: $linha->nome sobrenome: $linha->sobrenome <br>";
        }

        echo "Informações chamadas com sucesso<br>";
    }
    catch (PDOException $error)
    {
        echo "Recuperar falhou, erro: " . $error->getMessage();
    } 

    $conexao =  null; */


    /* try
    {
        $sql = "DELETE FROM Jogadores WHERE id = 2";

        $conexao->exec($sql);

        echo "Informações excluidas com sucesso<br>";
    }
    catch (PDOException $error)
    {
        echo "Excluir dados falhou, erro: " . $error->getMessage();
    }  */

    /* try
    {
        $sql = "INSERT INTO Jogadores (nome, sobrenome, email) 
                    VALUES ('Bielzin', 'Make-Lover', 'email@email.com')";

        $conexao->exec($sql);

        echo "Informações adicionadas com sucesso<br>";
    }
    catch (PDOException $error)
    {
        echo "Adicionar dados falhou, erro: " . $error->getMessage();
    } */



    /* try
    {
        $sql = "CREATE TABLE Jogadores(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(30) NOT NULL,
        senha VARCHAR(30) NOT NULL,
        pontos INT(30) NOT NULL,
        mult1 INT(30) NOT NULL,
        mult2 INT(30) NOT NULL,
        mult3 INT(30) NOT NULL)";
        
        $conexao->exec($sql);
        echo "Tabela criada com sucesso<br>";
    }
    catch (PDOException $error)
    {
        echo "Criação da tabela falhou, erro: " . $error->getMessage();
    } */


    /* //Cria um BD
    try
    {
        $conexao->exec("CREATE SCHEMA dogeMiner");
        echo "Banco de dados criado";
    }
    catch (PDOException $error)
    {
        echo "Criação falhou, erro: " . $error->getMessage();
    } */



?>