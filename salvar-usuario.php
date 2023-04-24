<?php 
    switch ($_POST["acao"] ){
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];

            $sql = "INSERT INTO usuarios (nome,email,senha,data_nasc) VALUES ('{$nome}','{$email}','{$senha}','{$data_nasc}')";

            $res = $conn->query($sql);
            if($res==true){
                print"<script>alert('Cadastrado com sucesso');</script>";
                print"<script>location.href='?page=listar';</script>";
            }else{
                print"<script>alert('Não foi possível cadastrar');</script>";
            }
            break;

        case 'editar':
            // Seu código para ação de edição aqui
            break;

        case 'excluir':
            // Seu código para ação de exclusão aqui
            break;
        
        default:
            // Tratamento para ação desconhecida aqui
            break;
    }
