<?php
            switch (@$_REQUEST["acao"]){
                case "cadastrar_pessoa": 

                $nome = $_POST["nome"];
                $cpf = $_POST["cpf"];

                $sql = "INSERT INTO pessoa (nome, cpf) VALUES ('{$nome}','{$cpf}')";
                $query = $connection->query($sql);

                break;

                case "editar_pessoa": 
                    include("utilites\Listar_Contato.php");
                break;
                case "incluir_pessoa": 
                  include("utilites\salvar_pessoas.php");
              break;
    }
?>