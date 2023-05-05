<?php
    switch ($_REQUEST["acao"]) {

        case 'cadastrar':

            $email = $_POST["email"];

            $senha = md5($_POST["senha"]);

            $sql = "INSERT INTO usuarios (email, senha) VALUES ('{$email}', '{$senha}')";

            $result = $conn->query($sql);

            if($result==true){
                print"<div class=alert-sucess>";
                print"<p>Cadastro efetuado com sucesso!</p>";
                print"</div>";
            }

            else{
                echo "<script>
                alert('Erro ao cadastrar!');
                location.href='list.php';
                </script>";
            }

        break;

        case 'editar':

        break;

        case 'excluir':
        
        break;

    }

    ?>