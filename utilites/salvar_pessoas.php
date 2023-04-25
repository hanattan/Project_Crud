<?php
            switch (@$_REQUEST["acao"]){

                case "cadastrar_pessoa": 

                $nome = $_POST["nome"];
                $cpf = $_POST["cpf"];

                $sql = "INSERT INTO pessoa (nome, cpf) VALUES ('{$nome}','{$cpf}')";
                $query = $connection->query($sql);

                if($query == true){
                echo "<script> alert('Cadastro de Pessoa feito com sucesso!')</script>";
                echo "<script> location.href:'?page=home'</script>";
                }else{
                echo "<script> alert('Cadastro de Pessoa nâo realizado!')</script>";
                echo "<script> location.href:'?page=home'</script>";
                }

                break;

                case "editar_pessoa": 
                    //include("utilites\Listar_Contato.php");
                break;
                case "incluir_pessoa": 
                  //include("utilites\salvar_pessoas.php");
              break;
    }
?>