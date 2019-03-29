<?php
    print_r(PDO::getAvailableDrivers());

    //Conectando com o MySQL
    try 
    {
        //$conexao = new PDO("mysql: host=localhost;", "root", "");
        $conexao = new PDO("mysql: host=localhost; dbname=bancodedados;", "root", "");

        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "Conectado com sucesso";
    }
    catch(PDOException $e)
    {
        ECHO "Conexao falhou, erro: " . $e->getMessage();
    }

    //Criando um BancoDeDados:
    /* try 
    {
        $conexao->exec("CREATE SCHEMA BANCODEDADOS");

        echo "BD criado";
    }
    catch(PDOException $e)
    {
        ECHO "Conexao falhou, erro: " . $e->getMessage();
    } */


    //criando tabela
    /* try
    {
        $sql = "CREATE TABLE Visitantes(
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nome VARCHAR(30) NOT NULL,
            sobrenome VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            dataDeRegistro TIMESTAMP)";

        $conexao->exec($sql);

        echo "Tabela criada com sucesso";
    }
    catch (PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    } */

    //adicionando dados no BD
    /* try
    {
        $sql = "INSERT INTO visitantes (nome, sobrenome, email)
        VALUES ('Biel', 'Make-Lover', 'vitor.s.alencar@hotmail.com')";

        $conexao->exec($sql);

        echo "Adicionados dados na tabela com sucesso";
    }
    catch (PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    } */


    //adicionando varias linhas de uma vez
    /* try
    {   //decalrando o padrao de inserção de dados
        $statement  = $conexao->prepare("INSERT INTO visitantes (nome, sobrenome, email)
        VALUES (:varNome, :varSobrenome, :varEmail)");

        $statement->bindParam(":varNome", $nome);
        $statement->bindParam(":varSobrenome", $sobrenome);
        $statement->bindParam(":varEmail", $email);

        $nome = "Vitor"; $sobrenome = "Alencar"; $email = "email@email.com";
        $statement->execute();

        $nome = "Gabriel"; $sobrenome = "Souza"; $email = "mail@live.com";
        $statement->execute();

        echo "Adicionados dados na tabela com sucesso";
    }
    catch (PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }
    */

    //excluindo dados
    /* try
    {   //decalrando o padrao de inserção de dados
        $sql = "DELETE FROM Visitantes WHERE id = 1";

        $conexao->exec($sql);

        echo "Excluido da tabela com sucesso";
    }
    catch (PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    } */



    //recuperando dados
   /*  echo "<table style='border: solid 1px black;'>
          <tr><th>ID</th><th>NOME</th><th>SOBRENOME</th></tr>";

    try
    {
        $sql = "SELECT id, nome, sobrenome FROM Visitantes";
        $resultado = $conexao->query($sql);

        while($linha = $resultado->fetch(PDO::FETCH_OBJ))
        {
            echo "<tr><td>" . $linha->id . "</td> <td>" . $linha->nome . "</td><td>" . $linha->sobrenome . "</td></tr>";
        }

        echo "</table>";
    }
    catch (PDOException $e)
    {
        echo "Coleta de dados falhou <br>" . $e->getMessage();
    } */
    

    //atualizando dados:
    /* try
    {
        $sql = "UPDATE Visitantes SET sobrenome = 'Marmota' WHERE id = 2";

        $statement = $conexao->prepare($sql);

        $statement->execute();

        echo $statement->rowCount() . " mudanças foram feitas";
    }

    catch (PDOException $e)
    {
        echo "Atualização Falhou: " . $e->getMessage();
    } */
?>