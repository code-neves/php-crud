<?php


        $email = $_POST["email"];
        $senha = md5($_POST["senha"]);

        $sql = "INSERT INTO usuarios (email, senha) VALUES ('{$email}', '{$senha}')";
        $result = $conn->query($sql);

        if ($result) {
            echo "<div class='alert-sucess'>";
            echo "<p>Cadastro efetuado com sucesso!</p>";
            echo "</div>";
        } else {
            echo "<script>alert('Erro ao cadastrar!');</script>";
        }
       

?>